#!/bin/sh
set -e

PORT=${PORT:-80}
echo "Starting PHP server on port $PORT..."
php -S 0.0.0.0:$PORT
