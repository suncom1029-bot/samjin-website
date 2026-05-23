#!/bin/bash
set -e

# Set default port to 80 if PORT env var is not set
PORT=${PORT:-80}

# Create Apache configuration with dynamic port
cat > /etc/apache2/ports.conf <<EOF
Listen $PORT
EOF

# Update default virtual host to listen on dynamic port
sed -i "s/<VirtualHost \*:80>/<VirtualHost *:$PORT>/" /etc/apache2/sites-enabled/000-default.conf

# Enable required modules
a2enmod rewrite
a2enmod headers
a2enmod deflate

# Start Apache
exec apache2-foreground
