# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**삼진엘앤디 홈페이지 리뉴얼** — PHP 8.2 + Tailwind CSS 기반 반응형 랜딩페이지

- **Stack**: PHP 8.2 (Apache), Tailwind CSS (CDN), Swiper.js, Unsplash 이미지
- **Deployment**: Docker Compose (로컬 개발)
- **Design**: 다이나믹/임팩트 스타일, 완전 반응형 (모바일/태블릿/데스크탑)

## Quick Start

```bash
# Docker 시작 (포트 8080 → 컨테이너 내부 80)
cd /Users/suncom/Project/samjin-new
docker compose up -d

# 브라우저 열기
open http://localhost:8080

# Docker 중지
docker compose down

# 로그 확인
docker logs samjin_dev
```

## Deployment

**Repository**: https://github.com/suncom1029-bot/samjin-website  
**Live Site**: Railway.app (auto-deploys on `git push` to main)

- Changes to main branch → GitHub webhook triggers Railway redeploy (2-3 min)
- **Critical**: Dockerfile contains `EXPOSE 80` and `ENV PORT=80` — do not remove. Railway uses these to detect the service port.
- Local: run on `localhost:8080` (docker-compose port mapping). Production: Railway generates public domain.

## Project Structure

```
samjin-new/
├── docker-compose.yml         # PHP 8.2-Apache 컨테이너
├── index.php                  # 메인 랜딩페이지 (9개 섹션)
├── includes/
│   ├── header.php            # Sticky 헤더 + GNB (text-lg)
│   ├── footer.php            # 푸터 + 사이트맵
│   └── mock-data.php         # PHP 배열 기반 목업 데이터
└── assets/
    ├── css/custom.css        # Tailwind 보완 + 커스텀 스타일
    ├── js/main.js            # 모바일 메뉴, 슬라이더, 스크롤 애니메이션
    └── img/                  # 로고, 메인 이미지들
```

## Key Files

| 파일 | 역할 |
|------|------|
| `index.php` | 랜딩페이지 전체 (Hero, Stats, About, Products, News, CTA, Footer) |
| `includes/header.php` | GNB 네비게이션, 로고(h1.jpg) |
| `includes/mock-data.php` | 뉴스, 제품, 통계, CTA 배너 목업 데이터 |
| `assets/css/custom.css` | 색상 시스템, 컴포넌트 스타일 (stat-card, product-card, etc) |
| `assets/js/main.js` | 슬라이더 초기화, 카운터 애니메이션, 스크롤 이벤트 |

## Architecture

### Docker & Port Mapping
- **docker-compose.yml**: `8080:80` (host:container) — local dev on port 8080
- **Dockerfile**: `EXPOSE 80` + `ENV PORT=80` — tells Railway which port to expose (do not change)
- **Why**: Railway auto-detects service port from Dockerfile; without explicit PORT env var, it can't generate public domain

### PHP 템플릿 구조
- `index.php` — 메인 페이지 (include 사용)
- `includes/` — 모듈식 컴포넌트 (header, footer, data)
- 백엔드 로직 없음 (목업 데이터만 사용)

### CSS 레이어
- **Tailwind CDN** — 기본 유틸리티 (반응형 클래스 포함)
- **custom.css** — 컬러 시스템 (--primary-green, --secondary-blue), 컴포넌트 스타일

### 반응형 브레이크포인트
| 화면 | 너비 | 주요 변화 |
|------|------|----------|
| 모바일 | < 768px | 1열 그리드, 햄버거 메뉴 |
| 태블릿 | 768~1024px | 2열 그리드 |
| 데스크탑 | > 1024px | 3열+ 그리드, 풀 GNB |

## Color System

```css
--primary-green: #00b96b (메인 색상, 버튼, 링크)
--secondary-blue: #0891df (포인트)
--dark-bg: #0f172a (진한 배경)
```

## Workflow: Development → Production

1. **Local Testing**
   - Run `docker compose up -d`, edit files, refresh `localhost:8080`
   - Check all sections render correctly across responsive breakpoints
2. **Push to GitHub**
   - `git add`, `git commit`, `git push origin main`
   - Railway auto-detects and redeploys (2-3 min)
   - Verify at Railway-generated public domain

## Common Tasks

### 섹션 추가
1. `index.php`에 새 섹션 HTML 추가
2. `mock-data.php`에 데이터 배열 정의
3. `custom.css`에 필요한 스타일 추가

### 이미지 변경
- **About Us**: `index.php` line ~95 이미지 URL 변경
- **Products**: `index.php` line ~200 `$product_images` 배열 수정
- 현재: Unsplash 무료 이미지 CDN 링크 사용

### 네비게이션 수정
- `includes/header.php` — GNB 메뉴 항목 (현재 text-lg)
- 드롭다운 서브메뉴 (현재 text-base)

## Notes

- **Docker**: PHP 8.2-Apache, rewrite 모듈 활성화
- **No Backend**: 백엔드는 나중에 개발 예정 (현재 목업만 사용)
- **Mock Data**: `includes/mock-data.php`에서 PHP 배열로 관리
- **Responsive**: Tailwind 기본 브레이크포인트 사용 (sm/md/lg/xl)
- **Images**: 로컬 이미지 + Unsplash CDN 혼합 사용
