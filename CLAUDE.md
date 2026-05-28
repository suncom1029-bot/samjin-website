# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

**삼진엘앤디 홈페이지 리뉴얼** — PHP 8.2 + Tailwind CSS 기반 반응형 랜딩페이지

- **Stack**: PHP 8.2 (Apache), Tailwind CSS (CDN), Swiper.js, Unsplash 이미지
- **Deployment**: Docker Compose (로컬 개발)
- **Design**: 다이나믹/임팩트 스타일, 완전 반응형 (모바일/태블릿/데스크탑)

## Quick Start

```bash
# 초기 설정: Git hooks 설치 (1회만)
bash scripts/install-hooks.sh

# Docker 시작 (포트 8080 → 컨테이너 내부 80)
docker compose up -d

# 브라우저 열기
open http://localhost:8080

# Docker 중지
docker compose down

# 로그 확인
docker logs samjin_dev
```

## Git Hooks (CLAUDE.md 자동 관리)

**Pre-commit Hook**: PHP, JS, CSS 파일이 변경될 때 CLAUDE.md 업데이트를 상기합니다.

```bash
# 초기 설정 (클론 후 1회만 실행)
bash scripts/install-hooks.sh

# 이제부터 중요 파일 변경 시 자동으로 확인
git commit -m "feat: Add new feature"  # ← hook이 CLAUDE.md 검증
```

**강제 진행** (hook 무시):
```bash
git commit --no-verify
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
├── company/
│   ├── greeting.php           # CEO 인사말 페이지 (4섹션)
│   ├── overview.php           # 회사개요 페이지 (7섹션)
│   ├── history.php            # 회사연혁 페이지 (4시대 타임라인)
│   └── facilities.php         # 사업장 페이지 (4개국 거점)
├── management/
│   ├── philosophy.php         # 경영이념 및 비전 페이지 (설립이념 3가지 + 2026 비전)
│   ├── competency.php         # 핵심역량 및 기술 페이지 (5가지 기술 + 특허 + 인증)
│   └── awards.php             # 수상 및 인증 페이지 (수상타임라인 + 4가지 인증)
├── products/
│   ├── display.php            # Display 부품 페이지 (도광판·확산판·Mold Frame)
│   ├── battery.php            # 2차전지 부품 페이지 (가스켓·ESS·UPS)
│   ├── oa.php                 # OA 제품 페이지 (Finisher·정렬시스템)
│   ├── mold.php               # 금형 & 핫런너 페이지 (Hot Runner 특허 5건)
│   └── lgp.php                # LGP 도광판 페이지 (7"~85" Roll Stamp 기술)
├── support/
│   └── inquiry.php            # 고객문의 페이지 (연락처·문의카테고리·FAQ)
├── recruit/
│   ├── jobs.php               # 채용공고 페이지 (채용정보 목록·복리후생)
│   └── process.php            # 채용절차 페이지 (5단계 프로세스)
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
| `company/greeting.php` | CEO 인사말 페이지 (배너, 메시지, 비전 카드) |
| `company/overview.php` | 회사개요 페이지 (회사 규모, 사업영역, 가치제안, 기술 현황) |
| `company/history.php` | 회사연혁 페이지 (4시대 타임라인: 창업기/성장기/도약기/전환기) |
| `company/facilities.php` | 사업장 페이지 (한국 본사 + 3개국 해외거점, 글로벌 전략) |
| `management/philosophy.php` | 경영이념 및 비전 페이지 (설립이념 3가지, 2026 비전) |
| `management/competency.php` | 핵심역량 및 기술 페이지 (5가지 기술, 특허, 인증) |
| `management/awards.php` | 수상 및 인증 페이지 (수상 타임라인, 4가지 국제 인증) |
| `products/display.php` | Display 부품 페이지 (도광판·확산판·Mold Frame, Roll Stamp 기술) |
| `products/battery.php` | 2차전지 부품 페이지 (배터리 가스켓, ESS/UPS 부품) |
| `products/oa.php` | OA 제품 페이지 (Finisher, 자동 정렬 시스템) |
| `products/mold.php` | 금형 & 핫런너 페이지 (Hot Runner 특허 5건, 초정밀 기술) |
| `products/lgp.php` | LGP 도광판 페이지 (7"~85" Roll Stamp 공법, 광효율 향상) |
| `includes/header.php` | Sticky 네비게이션, 로고, 드롭다운 메뉴 (GNB) - 경영관리·제품 링크 추가 |
| `includes/footer.php` | 푸터 콘텐츠, 빠른 링크 (회사/경영관리/제품 5개), 회사 정보 |
| `includes/mock-data.php` | 뉴스, 제품, 통계, CTA 배너 목업 데이터 |
| `assets/css/custom.css` | 색상 시스템, 컴포넌트 스타일 (stat-card, product-card, feature-card, etc) |
| `assets/js/main.js` | 슬라이더 초기화, 카운터 애니메이션, 스크롤 이벤트, 모바일 메뉴 |

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

## Sub-page Development (중요)

서브페이지(`company/greeting.php` 등)를 추가할 때는 **asset 경로를 반드시 절대경로로 사용**하세요:

```html
<!-- ❌ 잘못된 경로 (relative) — 서브페이지에서 깨짐 -->
<script src="assets/js/main.js"></script>
<link rel="stylesheet" href="assets/css/custom.css">

<!-- ✅ 올바른 경로 (absolute) -->
<script src="/assets/js/main.js"></script>
<link rel="stylesheet" href="/assets/css/custom.css">
<img src="/assets/img/h1.jpg">
```

**Why**: 상대경로는 현재 파일의 디렉토리를 기준으로 해석됩니다. `company/greeting.php`에서 `assets/js/main.js`로 요청하면 `company/assets/js/main.js`를 찾아 404가 발생합니다.

- `index.php` (루트) — 상대경로 가능
- `company/greeting.php` (서브폴더) — 반드시 절대경로 사용

## Workflow: Development → Production

1. **Local Testing**
   - Run `docker compose up -d`, edit files, refresh `localhost:8080`
   - Check all sections render correctly across responsive breakpoints
2. **Push to GitHub**
   - `git add`, `git commit`, `git push origin main`
   - Railway auto-detects and redeploys (2-3 min)
   - Verify at Railway-generated public domain

## Common Tasks

### 메인 페이지 섹션 추가
1. `index.php`에 새 섹션 HTML 추가
2. `mock-data.php`에 데이터 배열 정의
3. `custom.css`에 필요한 스타일 추가

### 서브페이지 추가
1. `company/` 또는 새 디렉토리에 `.php` 파일 생성
2. `<?php include '../includes/header.php'; ?>` — 헤더 포함
3. 콘텐츠 작성
4. `<?php include '../includes/footer.php'; ?>` — 푸터 포함
5. **중요**: 모든 asset 경로는 절대경로 사용 (`/assets/...`)
6. `header.php`와 `footer.php`의 GNB/사이트맵에 링크 추가

### 이미지 변경
- **About Us**: `index.php` line ~95 이미지 URL 변경
- **Products**: `index.php` line ~200 `$product_images` 배열 수정
- 현재: Unsplash 무료 이미지 CDN 링크 사용

### 네비게이션 수정
- `includes/header.php` — GNB 메뉴 항목 (현재 text-lg)
- 드롭다운 서브메뉴 (현재 text-base)
- 새 서브페이지 추가 시 `header.php`, `footer.php` 두 곳 모두 링크 추가

## Notes

- **Docker**: PHP 8.2-Apache, rewrite 모듈 활성화
- **Sub-pages**: `company/` 등의 서브페이지는 includes를 상대경로로 참조 (`../includes/header.php`), 다른 assets는 절대경로로 참조 (`/assets/...`)
- **No Backend**: 백엔드는 나중에 개발 예정 (현재 목업만 사용)
- **Mock Data**: `includes/mock-data.php`에서 PHP 배열로 관리
- **Responsive**: Tailwind 기본 브레이크포인트 사용 (sm/md/lg/xl)
- **Images**: 로컬 이미지 + Unsplash CDN 혼합 사용
- **Tailwind CDN**: 빌드 과정 없음 (CDN 직접 로드). 커스텀 클래스는 `custom.css`에서 정의
