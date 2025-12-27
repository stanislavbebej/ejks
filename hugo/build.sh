#!/usr/bin/env bash
CONTENT_HOME="piesne"
SOURCE_DB="../db/jks.csv"

# Cleanup
rm -fr content/$CONTENT_HOME public/*

# Build
while IFS="," read -r piesen strofa text; do
  text=${text//\"/}
  CONTENT_FILE="${CONTENT_HOME}/${piesen}.md"

  if [[ $strofa -eq 0 ]]; then
    hugo new content $CONTENT_FILE -f
    sed -i "s|title: .*|title: '${piesen}. ${text}'|" content/$CONTENT_FILE
    continue
  fi
  echo "${strofa}. ${text}" >>content/$CONTENT_FILE
done <$SOURCE_DB
