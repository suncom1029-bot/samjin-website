# /commit-and-deploy

코드 수정 후 GitHub 커밋과 Railway 자동 배포 일괄 처리

## Usage

```bash
/commit-and-deploy "헤더 네비게이션 추가"
/commit-and-deploy "버튼 색상 수정" --no-wait
/commit-and-deploy "모바일 반응형 스타일 개선" --no-open
```

## Description

이 스킬은 다음 워크플로우를 자동화합니다:
1. 변경사항 확인 (git status/diff)
2. 커밋 메시지 검증
3. 파일 스테이징 및 커밋
4. main 브랜치로 푸시
5. Railway 배포 모니터링 (선택)
6. 배포 완료 후 사이트 자동 열기 (선택)

## Parameters

**commit_message** (required)
- GitHub 커밋 메시지
- 예: "헤더 네비게이션 추가", "모바일 반응형 스타일 개선"
- 규칙: 최소 3자, 최대 100자, 영문/한글/숫자/-:() 가능

**wait_for_deployment** (optional, default: true)
- Railway 배포 완료를 대기할지 여부
- `--wait` / `--no-wait`
- true: 배포 완료까지 대기하며 상태 모니터링
- false: git push 후 즉시 완료

**open_url** (optional, default: true)
- 배포 완료 후 사이트를 브라우저에서 열지 여부
- `--open` / `--no-open`
- true: https://samjin-website-production.up.railway.app/ 자동 열기
- false: 배포 완료 알림만 표시

## Workflow

### Step 1: 변경사항 확인
```bash
git status
git diff --stat
```

### Step 2: 커밋 메시지 검증
- 비어있지 않은지 확인
- 최소 3자 이상인지 확인
- 패턴: `^[가-힣a-zA-Z0-9\s\-:()]+$`

### Step 3: 파일 스테이징
```bash
git add .
```

### Step 4: 커밋 생성
```bash
git commit -m "{commit_message}"
```

### Step 5: 메인 브랜치로 푸시
```bash
git push origin main
```
- GitHub 웹훅으로 Railway 자동 배포 트리거

### Step 6: 배포 상태 모니터링 (조건부)
- 조건: `wait_for_deployment = true`
- 폴링 주기: 5초
- 최대 대기시간: 5분
- 지표: BUILDING → DEPLOYING → ACTIVE (또는 CRASHED/FAILED)

### Step 7: 사이트 확인 (조건부)
- 조건: `open_url = true && 배포 성공`
- URL: https://samjin-website-production.up.railway.app/

## Success Response

```
✅ 배포 완료!
- 커밋: {commit_message}
- 브랜치: main
- 배포 상태: ACTIVE
- 접속: https://samjin-website-production.up.railway.app/
```

## Error Handling

| 상황 | 원인 | 해결 |
|------|------|------|
| 변경사항 없음 | 커밋할 파일 없음 | 파일 수정 후 재시도 |
| 커밋 실패 | pre-commit hook 오류 | `git status` 확인 후 수동 커밋 |
| 푸시 실패 | 네트워크 오류 또는 충돌 | `git pull origin main` 후 재시도 |
| 배포 타임아웃 | 배포가 5분 이상 소요 | Railway 대시보드에서 상태 확인 |

## Important Notes

### Git 설정
- `git user name/email`이 설정되어 있어야 합니다
- 확인: `git config user.name`

### 커밋 메시지 규칙 (권장)
- 영문 또는 한글 사용
- 특수문자는 `:` `-` `()` 만 허용
- 예: "헤더 메뉴 추가", "Fix: 버튼 색상", "Feat: 반응형 개선"

### Railway 배포
- main 브랜치 푸시 시 자동 배포 (GitHub 웹훅)
- 빌드 및 배포 소요 시간: 보통 2-3분
- 배포 중 이전 버전 서버 유지

### 트러블슈팅
- **배포 실패**: Railway 대시보드 로그 확인 (https://railway.app)
- **푸시 실패**: `git pull origin main`으로 브랜치 동기화
- **커밋 실패**: `git status`로 변경사항 확인

## Related

- 로컬 테스트: `docker compose up -d && open http://localhost:8080`
- 상태 확인: `git status && git log --oneline -5`
- 배포 로그: https://railway.app
