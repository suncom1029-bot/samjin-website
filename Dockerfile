FROM php:8.2-apache

WORKDIR /var/www/html

ENV APACHE_DOCUMENT_ROOT=/var/www/html
ENV PORT=80

# Copy source files
COPY . /var/www/html/

# Copy entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
