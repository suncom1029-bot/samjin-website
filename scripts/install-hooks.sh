#!/bin/bash

# Git hooks 설치 스크립트
# 사용법: bash scripts/install-hooks.sh

set -e

REPO_ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
HOOKS_DIR="$REPO_ROOT/.git/hooks"
SCRIPTS_DIR="$REPO_ROOT/scripts"

echo "📦 Git hooks 설치 중..."

# pre-commit hook 복사
cp "$SCRIPTS_DIR/hooks/pre-commit" "$HOOKS_DIR/pre-commit"
chmod +x "$HOOKS_DIR/pre-commit"

echo "✅ Pre-commit hook이 설치되었습니다!"
echo ""
echo "이제부터 다음 상황에서 자동으로 실행됩니다:"
echo "  • PHP, JS, CSS 파일이 변경된 커밋 시"
echo "  • CLAUDE.md 업데이트 여부를 확인합니다"
echo ""
echo "💡 강제 진행: git commit --no-verify"
