FROM php:8.2-apache

WORKDIR /var/www/html

# Copy all files
COPY . .

# Enable Apache modules for performance
RUN a2enmod rewrite && \
    a2enmod deflate && \
    a2enmod expires && \
    a2enmod headers

# Configure Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT=/var/www/html
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

EXPOSE 80
ENV PORT=80

# Start Apache
CMD ["apache2-foreground"]
