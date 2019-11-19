ARG TEMP_DIR=/tmp

# Builder container
FROM php:7.3-apache AS builder

# Install build tools
RUN apt-get update && \
    apt-get install -y sqlite3

# Build database
COPY db/ .
RUN echo .quit | sqlite3 -init init.sql ${TEMP_DIR}/jks.db

RUN ls -l ${TEMP_DIR}/jks.db

# Runtime container
FROM php:7.3-apache

# ENV PORT 8080

# Use the PORT environment variable in Apache configuration files.
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Configure PHP for production.
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Add application
COPY src/ /var/www/html/
COPY --from=builder ${TEMP_DIR}/jks.db /var/www/html/
