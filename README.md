# Jednotný katolícky spevník

## Databázová štruktúra

### Tabuľka `jks`

Číslo piesne | Poradové číslo strofy | Text strofy
------------ | --------------------- | -----------
247          | 0                     | Ó, Ježišu náš najmilší
247          | 1                     | Ó, Ježišu náš najmilší, - k obete sa schádzame, - ktorú tebe v čas terajší - skrze kňaza konáme. - Prijmi teda do milosti - vďačnú službu tu od nás, - aby s nami vo večnosti - tešili sa svätí z nás.
247          | 2                     | Tak je, buď vždy Bohu chvála, - jeho česť vždy hľadajme, - nech ho všetci ľudia chvália, - vrúcnym srdcom žiadajme, - lebo Otcom všetkých je nás, - ktorý nás tak miloval, - že i Syna svojho za nás - na smrť dať neľutoval.
247          | ...                   | ...

> Strofa s poradovým čislom `0` je nadpis piesne.

## Upraviť pieseň

* stiahnite si [CSV súbor](db/jks.csv) s databázou piesní pre tabuľku `jks`
* otvorte súbor napr. v programe [LibreOffice](https://www.libreoffice.org/download/download/)
* zachovajte formát súboru, v prípade LibreOffice zvoľte nastavenia: ![LibreOffce CSV import](/docs/pic/libreOffice.png)
* upravte zvolený riadok tak, ako je napísaný v knižnej podobe JKS
* vytvorte **pull request** cez GitHub na zapracovanie zmien

## Development

### Build

`docker build -t ejks:apache -f Dockerfile.apache .`

### Run

```
docker run    --rm -p 80:8080                      --name ejks-sk ejks:apache
docker run -d --rm -p 80:8080 -v src:/var/www/html --name ejks-sk ejks:apache
```

### Inspect

`docker exec -it ejks-sk /bin/sh`
