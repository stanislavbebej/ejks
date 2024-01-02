<!DOCTYPE html>
<html lang="sk" xml:lang="sk">

<head>
  <title>Informácie o stránke Jednotný Katolícky Spevník</title>
  <?php include "header.php"; ?>
  <style>
    .ui-header .ui-title {
      margin-right: 15%;
      margin-left: 15%;
    }
  </style>
</head>

<body>
  <div data-role="page" id="info" class="ui-page-theme-b">
    <div data-role="header">
      <h1>Jednotný Katolícky Spevník</h1>
    </div>
    <div role="main" class="ui-content" aria-label="Info page">
      <p>
        Vitajte na stránke "Jednotný Katolícky Spevník" (JKS) určenej pre mobilné zariadenia. Vznikla ako moja osobná iniciatíva katolíka zvyknutého na istý "komfort", ktorý mi návštevou svätej omše v inej farnosti ako mojej "domácej" chýbal.
      </p>
      <p>
        Vo farnosti Habovka si totiž veriaci nepotrebujú priniesť knižku JKS, pretože piesne sa v kostole počas omše premietajú dataprojektorom na plátno. A tak sa aj veriaci, ktorí bežne so sebou JKS nenosia, zapájajú do omše svojím spevom a spievajú vždy správnu pieseň, správnu strofu a správny text. Existujú totiž staršie a novšie texty piesní a každý si potom spieva tú svoju.
      </p>
      <p>
        Aj keď v mnohých kostoloch sú k dispozícii pri vstupe do chrámu, nie je to pravidlom. Zobrať si so sebou svoj mobil však zabudnem málokedy. Chýbala mi ale funkčná a jednoduchá forma, ako doň dostať JKS. Na internete (1.) sa dá nájsť oficiálna stránka JKS od Spolku Svätáho Vojtecha (SSV). Nie je však určená pre mobilné zariadenia a zrejme kvôli ochrane textov sú tieto zobrazované vo forme obrázka, ktoré okrem ostatných dekorácií, zbytočne spomaľujú jej načítanie. Ďalší kandidát (2.), ktorý je zrejme tiež len súkromnou iniciatívou "nespokojného" katolíka a poslúžil ako inšpirácia pre môj projekt, postráda formu a užívateľskú prívetivosť pri práci na mobilnom zariadení. Na jednej webstránke sú všetky texty, čo ju na jednej strane umožňuje otvoriť doma a v kostole s ňou pracovať bez potreby internetu, na druhej strane jej veľkosť spomaľuje jej načítanie cez mobilný internet, ťažko sa na nej pohybuje a obsahuje reklamy.
      </p>
      <p>
        Môj projekt www.ejks.sk sa snaží o stránku s textami piesní z JKS, ktorá by bola:
      <ul>
        <li>prispôsobená pre mobilné zariadenia</li>
        <li>zdrojom údajov pre dataprojektory</li>
        <li>jednoduchá a prehľadná</li>
        <li>rýchla a bez zbytočných obrázkov</li>
        <li>prispôsobiteľná potrebám používateľa</li>
        <li>bez chýb a preklepov</li>
        <li>na ľahko zapamätateľnej adrese</li>
        <li>zadarmo a bez reklám</li>
      </ul>
      </p>
      <p>
        Stránku som vytvoril vo svojom voľnom čase a prevádzkujem ju z vlastných úspor. Verím, že cena webhosting-u a domény nevzrastie natoľko, aby som si jej prevádzku nevedel dovoliť. Dúfam, že pomôže aj ostatným častejšie sa zapájať so spevu počas svätej omše, zvlášť mladým ľuďom, ktorí knižku JKS možno v ruke nikdy nedržali, avšak ani svoj mobil nikdy z ruky nepustili :-).
      </p>
      <p>
        Ak by ste stránku vedeli vylepšiť, prípadne chcete len opraviť chybu, jej zdrojový kód je voľne dostupný na <a href="https://github.com/stanislavbebej/ejks.git" target="_blank" rel="noopener noreferrer">GitHub</a>. <!-- Testovacia verzia stránky beží v <a href="https://ejks-sk-q4it3p4hba-ew.a.run.app/" target="_blank" rel="noopener noreferrer">Google Cloud Run</a>. -->
      </p>
    </div>
    <div data-role="footer" data-position="fixed">
      <p>
      <ol>
        <li><a href="http://www.nws.sk/ssv/JKS/index.php?a=123" target="_blank" rel="noopener noreferrer">www.nws.sk</a></li>
        <li><a href="http://www.spevnik.szm.com" target="_blank" rel="noopener noreferrer">www.spevnik.szm.com</a></li>
      </ol>
      </p>
      <div data-role="navbar">
        <ul>
          <li><a href="/" data-icon="search" data-transition="none"></a></li>
          <li><a href="info.html" data-icon="info" class="ui-state-disabled"></a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>
