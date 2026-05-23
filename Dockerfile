FROM php:8.2-cli

WORKDIR /var/www/html

ENV PORT=80

# Copy source files
COPY . /var/www/html/

# Create a simple startup script
RUN echo '#!/bin/sh\nport=${PORT:-80}\necho "Starting PHP server on port $port"\nphp -S 0.0.0.0:$port' > /usr/local/bin/start-server.sh && \
    chmod +x /usr/local/bin/start-server.sh

EXPOSE 80

CMD ["/usr/local/bin/start-server.sh"]
