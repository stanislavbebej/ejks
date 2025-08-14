#!/usr/bin/env bash
BUILD_DIR=/public
TMP_DIR=$(mktemp -d)

# Install build tools
apk --no-cache add sqlite
wget -qO - https://github.com/tdewolff/minify/releases/download/v2.23.11/minify_linux_amd64.tar.gz | tar -xf - -C /usr/local/bin minify

# Prepare source files
cp -R db/* src/* $TMP_DIR
cd $TMP_DIR

# Build database
echo .quit | sqlite3 -init init.sql jks.db

# Build static content
RUN mkdir -p $BUILD_DIR

php index.php | minify --type html | tr -d '\n' >${BUILD_DIR}/index.html
php info.php | minify --type html | tr -d '\n' >${BUILD_DIR}/info.html

echo "SELECT cislo FROM jks WHERE strofa = 0 ORDER BY cislo" | sqlite3 jks.db >piesen.list
for i in $(cat piesen.list); do php-cgi -q jks.php id=$i | minify --type html | tr -d '\n' >${BUILD_DIR}/$i.html; done

# Build sitemap.txt
find $BUILD_DIR -type f -name '*.html' | sed "s#${BUILD_DIR}#https:/${BUILD_DIR}.sk#g" | sort -u >${BUILD_DIR}/sitemap.txt

# Add static content
cp -R favicon.ico googlee78c4ec223f14545.html ico $BUILD_DIR
