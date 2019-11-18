# Builder container
FROM alpine:3.10 AS builder

RUN apk --no-cache add sqlite

COPY db/ .

RUN echo .quit | sqlite3 -init init.sql jks.db

# Runtime container
FROM php:7.3-apache

# Add application
WORKDIR /var/www/html
COPY --from=builder jks.db /var/www/html/
COPY src/ /var/www/html/

# Use the PORT environment variable in Apache configuration files.
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Configure PHP for production.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
