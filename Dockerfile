FROM php:8.2-cli

WORKDIR /var/www/html

ENV PORT=80

# Copy startup script
COPY start-server.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/start-server.sh

# Copy source files
COPY . /var/www/html/

EXPOSE 80

CMD ["/usr/local/bin/start-server.sh"]
