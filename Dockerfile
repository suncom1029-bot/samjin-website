FROM php:8.2-apache

WORKDIR /var/www/html

ENV APACHE_DOCUMENT_ROOT=/var/www/html
ENV PORT=80

RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]
