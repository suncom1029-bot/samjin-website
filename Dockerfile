FROM php:8.2-cli

WORKDIR /var/www/html

# Copy all files
COPY . .

EXPOSE 80

# Start PHP development server
CMD ["php", "-S", "0.0.0.0:80"]
