#!/bin/bash
set -e

# Set default port to 80 if PORT env var is not set
PORT=${PORT:-80}

# Configure Apache to listen on the correct port
echo "Configuring Apache to listen on port $PORT..."

# Ensure ports.conf exists and is writable
touch /etc/apache2/ports.conf

# Remove any existing Listen directives and add the new one
sed -i '/^Listen/d' /etc/apache2/ports.conf
echo "Listen $PORT" >> /etc/apache2/ports.conf

# Update default virtual host to listen on dynamic port
if [ -f /etc/apache2/sites-enabled/000-default.conf ]; then
  sed -i "s/<VirtualHost \*:80>/<VirtualHost *:$PORT>/" /etc/apache2/sites-enabled/000-default.conf
  sed -i "s/<VirtualHost \*:\*>/<VirtualHost *:$PORT>/" /etc/apache2/sites-enabled/000-default.conf
fi

# Enable required modules (ignore if already enabled)
a2enmod rewrite 2>/dev/null || true
a2enmod headers 2>/dev/null || true
a2enmod deflate 2>/dev/null || true

echo "Starting Apache on port $PORT..."
# Start Apache
exec apache2-foreground
