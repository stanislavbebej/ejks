# Builder container
FROM php:8.3.1-cli-alpine3.19 AS builder

# Install build tools
RUN apk --no-cache add sqlite \
    && wget https://github.com/tdewolff/minify/releases/download/v2.20.10/minify_linux_amd64.tar.gz \
    && tar -zxf minify_linux_amd64.tar.gz -C /usr/local/bin minify

# Add application
COPY src/ .

# Build database
COPY db/ .
RUN echo .quit | sqlite3 -init init.sql jks.db

# Build static content
RUN mkdir /ejks \
    && php index.php | minify --type html | tr -d '\n' > /ejks/index.html \
    && php info.php  | minify --type html | tr -d '\n' > /ejks/info.html \
    && echo "SELECT cislo FROM jks WHERE strofa = 0 ORDER BY cislo" | sqlite3 jks.db > piesen.list \
    && for i in $(cat piesen.list); do php-cgi -q jks.php id=$i | minify --type html | tr -d '\n' > /ejks/$i.html; done

# Runtime container
FROM nginx:1.25.3-alpine-slim

# Add application
COPY --from=builder /ejks /usr/share/nginx/html
COPY src/favicon.ico src/googlee78c4ec223f14545.html /usr/share/nginx/html/
COPY src/ico /usr/share/nginx/html/ico
