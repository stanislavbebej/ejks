DROP TABLE IF EXISTS jks;

CREATE TABLE IF NOT EXISTS jks (
  cislo  INTEGER COMMENT 'Cislo piezne z JKS',
  strofa INTEGER COMMENT 'Poradove cislo strofy',
  text   TEXT    COMMENT 'Text strofy'
);

.mode csv
.import jks.csv jks
