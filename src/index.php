<?php
  include "flags.php";
  $checked = "checked";
?>

<!DOCTYPE html>
<html lang="sk" xml:lang="sk">
  <head>
    <title>Jednotný Katolícky Spevník, hľadať podľa čísla piesne</title>
    <?php include "header.php"; ?>
    <style>
      .ui-header .ui-title {
        margin-right: 15%;
        margin-left: 15%;
      }
    </style>
  </head>
  <body>
    <div data-role="page" id="domov" class="<?php echo $trieda_temy; ?>">
      <div data-role="header">
        <h1>Jednotný Katolícky Spevník</h1>
      </div>
      <div role="main" class="ui-content" aria-label="Home page">
        <p>
          <form>
            <input type="text" data-type="search" name="cislo_piesne" id="cislo_piesne" data-clear-btn="true" placeholder="Hľadať podľa čísla piesne" autofocus>
          </form>
          <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-inset="true" data-input="#cislo_piesne">
            <li data-filtertext="1 o prekrasna hviezda ranna"><a href="jks.php?id=1<?php echo $balicek; ?>" data-ajax="false">1 Ó, prekrásna Hviezda ranná</a></li>
            <li data-filtertext="2 anjel pana"><a href="jks.php?id=2<?php echo $balicek; ?>" data-ajax="false">2 Anjel Pána</a></li>
            <li data-filtertext="3 anjel z neba"><a href="jks.php?id=3<?php echo $balicek; ?>" data-ajax="false">3 Anjel z neba</a></li>
            <li data-filtertext="4 boze ku tebe"><a href="jks.php?id=4<?php echo $balicek; ?>" data-ajax="false">4 Bože, ku tebe</a></li>
            <li data-filtertext="5 bud maria pozdravena"><a href="jks.php?id=5<?php echo $balicek; ?>" data-ajax="false">5 Buď, Mária, pozdravená</a></li>
            <li data-filtertext="6 dennica uz vysla"><a href="jks.php?id=6<?php echo $balicek; ?>" data-ajax="false">6 Dennica už vyšla</a></li>
            <li data-filtertext="7 dnes panna je pozdravena"><a href="jks.php?id=7<?php echo $balicek; ?>" data-ajax="false">7 Dnes Panna je pozdravená</a></li>
            <li data-filtertext="8 dusa moja celou silou"><a href="jks.php?id=8<?php echo $balicek; ?>" data-ajax="false">8 Duša moja celou silou</a></li>
            <li data-filtertext="9 poslany je anjel"><a href="jks.php?id=9<?php echo $balicek; ?>" data-ajax="false">9 Poslaný je anjel</a></li>
            <li data-filtertext="10 anjel gabriel"><a href="jks.php?id=10<?php echo $balicek; ?>" data-ajax="false">10 Anjel Gabriel</a></li>
            <li data-filtertext="11 hla anjel pana vzneseny"><a href="jks.php?id=11<?php echo $balicek; ?>" data-ajax="false">11 Hľa, anjel Pána vznešený</a></li>
            <li data-filtertext="12 hla panna je pozdravena"><a href="jks.php?id=12<?php echo $balicek; ?>" data-ajax="false">12 Hľa, Panna je pozdravená</a></li>
            <li data-filtertext="13 moc bozia divna"><a href="jks.php?id=13<?php echo $balicek; ?>" data-ajax="false">13 Moc Božia divná</a></li>
            <li data-filtertext="14 mudrost a sila"><a href="jks.php?id=14<?php echo $balicek; ?>" data-ajax="false">14 Múdrosť a sila</a></li>
            <li data-filtertext="15 nes gabrielu"><a href="jks.php?id=15<?php echo $balicek; ?>" data-ajax="false">15 Nes, Gabrielu</a></li>
            <li data-filtertext="16 oblaky z neba"><a href="jks.php?id=16<?php echo $balicek; ?>" data-ajax="false">16 Oblaky z neba</a></li>
            <li data-filtertext="17 otec nebesky"><a href="jks.php?id=17<?php echo $balicek; ?>" data-ajax="false">17 Otec nebeský</a></li>
            <li data-filtertext="18 pan boh vsemohuci sudca nas"><a href="jks.php?id=18<?php echo $balicek; ?>" data-ajax="false">18 Pán Boh všemohúci, Sudca náš</a></li>
            <li data-filtertext="19 po zlom pade"><a href="jks.php?id=19<?php echo $balicek; ?>" data-ajax="false">19 Po zlom páde</a></li>
            <li data-filtertext="20 pridze nas mily spasitel"><a href="jks.php?id=20<?php echo $balicek; ?>" data-ajax="false">20 Príďže, náš milý Spasiteľ</a></li>
            <li data-filtertext="21 roste nebesa"><a href="jks.php?id=21<?php echo $balicek; ?>" data-ajax="false">21 Roste, nebesá</a></li>
            <li data-filtertext="22 uz z neba posol schadza"><a href="jks.php?id=22<?php echo $balicek; ?>" data-ajax="false">22 Už z neba posol schádza</a></li>
            <li data-filtertext="23 tys panna plna milosti"><a href="jks.php?id=23<?php echo $balicek; ?>" data-ajax="false">23 Tys’, Panna plná milosti</a></li>
            <li data-filtertext="24 veselo spievajme"><a href="jks.php?id=24<?php echo $balicek; ?>" data-ajax="false">24 Veselo spievajme</a></li>
            <li data-filtertext="25 v sposobe chleba"><a href="jks.php?id=25<?php echo $balicek; ?>" data-ajax="false">25 V spôsobe chleba</a></li>
            <li data-filtertext="26 v temnosti otcovia"><a href="jks.php?id=26<?php echo $balicek; ?>" data-ajax="false">26 V temnosti Otcovia</a></li>
            <li data-filtertext="27 v ziare prejasnej"><a href="jks.php?id=27<?php echo $balicek; ?>" data-ajax="false">27 V žiare prejasnej</a></li>
            <li data-filtertext="28 pride kristus"><a href="jks.php?id=28<?php echo $balicek; ?>" data-ajax="false">28 Príde Kristus</a></li>
            <li data-filtertext="29 radujze sa panna slavna"><a href="jks.php?id=29<?php echo $balicek; ?>" data-ajax="false">29 Radujže sa, Panna slávna</a></li>
            <li data-filtertext="30 zdravas krasna pani anjelska"><a href="jks.php?id=30<?php echo $balicek; ?>" data-ajax="false">30 Zdravas’, krásna Pani anjelská</a></li>
            <li data-filtertext="31 zdravas maria"><a href="jks.php?id=31<?php echo $balicek; ?>" data-ajax="false">31 Zdravas’, Mária</a></li>
            <li data-filtertext="32 zdravas zdravas o maria"><a href="jks.php?id=32<?php echo $balicek; ?>" data-ajax="false">32 Zdravas’, zdravas’, ó, Mária</a></li>
            <li data-filtertext="33 zdravas maria krasna"><a href="jks.php?id=33<?php echo $balicek; ?>" data-ajax="false">33 Zdravas’, Mária, krásna</a></li>
            <li data-filtertext="34 syn bozi sa nam narodil"><a href="jks.php?id=34<?php echo $balicek; ?>" data-ajax="false">34 Syn Boží sa nám narodil</a></li>
            <li data-filtertext="35 anjel pana pastierom"><a href="jks.php?id=35<?php echo $balicek; ?>" data-ajax="false">35 Anjel Pána pastierom</a></li>
            <li data-filtertext="36 a vcera z vecera"><a href="jks.php?id=36<?php echo $balicek; ?>" data-ajax="false">36 A včera z večera</a></li>
            <li data-filtertext="37 budme vsetci poteseni"><a href="jks.php?id=37<?php echo $balicek; ?>" data-ajax="false">37 Buďme všetci potešení</a></li>
            <li data-filtertext="38 boh sa nam teraz narodil"><a href="jks.php?id=38<?php echo $balicek; ?>" data-ajax="false">38 Boh sa nám teraz narodil</a></li>
            <li data-filtertext="39 buvaj dieta krasne"><a href="jks.php?id=39<?php echo $balicek; ?>" data-ajax="false">39 Búvaj, Dieťa krásne</a></li>
            <li data-filtertext="40 cas radosti"><a href="jks.php?id=40<?php echo $balicek; ?>" data-ajax="false">40 Čas radosti</a></li>
            <li data-filtertext="41 dietatko sa nam dnes zrodilo"><a href="jks.php?id=41<?php echo $balicek; ?>" data-ajax="false">41 Dieťatko sa nám dnes zrodilo</a></li>
            <li data-filtertext="42 ake to svetlo"><a href="jks.php?id=42<?php echo $balicek; ?>" data-ajax="false">42 Aké to svetlo</a></li>
            <li data-filtertext="43 dnes sa kristus narodil"><a href="jks.php?id=43<?php echo $balicek; ?>" data-ajax="false">43 Dnes sa Kristus narodil</a></li>
            <li data-filtertext="44 narodil sa kristus pan"><a href="jks.php?id=44<?php echo $balicek; ?>" data-ajax="false">44 Narodil sa Kristus Pán</a></li>
            <li data-filtertext="45 aky je to svit"><a href="jks.php?id=45<?php echo $balicek; ?>" data-ajax="false">45 Aký je to svit</a></li>
            <li data-filtertext="46 dietatko spanile"><a href="jks.php?id=46<?php echo $balicek; ?>" data-ajax="false">46 Dieťatko spanilé</a></li>
            <li data-filtertext="47 dnes sa stalo"><a href="jks.php?id=47<?php echo $balicek; ?>" data-ajax="false">47 Dnes sa stalo</a></li>
            <li data-filtertext="48 dnesny den sa radujme"><a href="jks.php?id=48<?php echo $balicek; ?>" data-ajax="false">48 Dnešný deň sa radujme</a></li>
            <li data-filtertext="49 dobra novina"><a href="jks.php?id=49<?php echo $balicek; ?>" data-ajax="false">49 Dobrá novina</a></li>
            <li data-filtertext="50 dobry pastier sa narodil"><a href="jks.php?id=50<?php echo $balicek; ?>" data-ajax="false">50 Dobrý pastier sa narodil</a></li>
            <li data-filtertext="51 do hory do lesa valasi"><a href="jks.php?id=51<?php echo $balicek; ?>" data-ajax="false">51 Do hory, do lesa, valasi</a></li>
            <li data-filtertext="52 do mesta betlema"><a href="jks.php?id=52<?php echo $balicek; ?>" data-ajax="false">52 Do mesta Betlema</a></li>
            <li data-filtertext="53 nesiem vam noviny"><a href="jks.php?id=53<?php echo $balicek; ?>" data-ajax="false">53 Nesiem vám noviny</a></li>
            <li data-filtertext="54 hla zastup zboru anjelskeho"><a href="jks.php?id=54<?php echo $balicek; ?>" data-ajax="false">54 Hľa, zástup zboru anjelského</a></li>
            <li data-filtertext="55 jak velka to milost"><a href="jks.php?id=55<?php echo $balicek; ?>" data-ajax="false">55 Jak veľká to milosť</a></li>
            <li data-filtertext="56 kde si nas mesias"><a href="jks.php?id=56<?php echo $balicek; ?>" data-ajax="false">56 Kde si, náš Mesiáš</a></li>
            <li data-filtertext="57 ked maria placucemu"><a href="jks.php?id=57<?php echo $balicek; ?>" data-ajax="false">57 Keď Mária plačúcemu</a></li>
            <li data-filtertext="58 kyrie eleison – pana krista"><a href="jks.php?id=58<?php echo $balicek; ?>" data-ajax="false">58 Kyrie eleison – Pána Krista</a></li>
            <li data-filtertext="59 kyrie eleison – vitaj"><a href="jks.php?id=59<?php echo $balicek; ?>" data-ajax="false">59 Kyrie eleison – Vitaj</a></li>
            <li data-filtertext="60 o divadlo krasne"><a href="jks.php?id=60<?php echo $balicek; ?>" data-ajax="false">60 Ó, divadlo krásne</a></li>
            <li data-filtertext="61 laska vola ma"><a href="jks.php?id=61<?php echo $balicek; ?>" data-ajax="false">61 Láska volá ma</a></li>
            <li data-filtertext="62 narodil sa spasitel"><a href="jks.php?id=62<?php echo $balicek; ?>" data-ajax="false">62 Narodil sa Spasiteľ</a></li>
            <li data-filtertext="63 narodil sa kristus v betleme"><a href="jks.php?id=63<?php echo $balicek; ?>" data-ajax="false">63 Narodil sa Kristus v Betleme</a></li>
            <li data-filtertext="64 od nas davno tuzeny"><a href="jks.php?id=64<?php echo $balicek; ?>" data-ajax="false">64 Od nás dávno túžený</a></li>
            <li data-filtertext="65 pasli ovce valasi"><a href="jks.php?id=65<?php echo $balicek; ?>" data-ajax="false">65 Pásli ovce valasi</a></li>
            <li data-filtertext="66 o chyr preblahy"><a href="jks.php?id=66<?php echo $balicek; ?>" data-ajax="false">66 Ó, chýr preblahý</a></li>
            <li data-filtertext="67 panna cista"><a href="jks.php?id=67<?php echo $balicek; ?>" data-ajax="false">67 Panna čistá</a></li>
            <li data-filtertext="68 pastieri pastieri"><a href="jks.php?id=68<?php echo $balicek; ?>" data-ajax="false">68 Pastieri, pastieri</a></li>
            <li data-filtertext="69 plesa matka"><a href="jks.php?id=69<?php echo $balicek; ?>" data-ajax="false">69 Plesá Matka</a></li>
            <li data-filtertext="70 plesa svet"><a href="jks.php?id=70<?php echo $balicek; ?>" data-ajax="false">70 Plesá svet</a></li>
            <li data-filtertext="71 plesajte krestania"><a href="jks.php?id=71<?php echo $balicek; ?>" data-ajax="false">71 Plesajte, kresťania</a></li>
            <li data-filtertext="72 pocujte radost utesenu"><a href="jks.php?id=72<?php echo $balicek; ?>" data-ajax="false">72 Počujte radosť utěšenu</a></li>
            <li data-filtertext="73 pocuvajte krestania"><a href="jks.php?id=73<?php echo $balicek; ?>" data-ajax="false">73 Počúvajte, kresťania</a></li>
            <li data-filtertext="74 ponahlajme pastuskovia"><a href="jks.php?id=74<?php echo $balicek; ?>" data-ajax="false">74 Ponáhľajme, pastuškovia</a></li>
            <li data-filtertext="75 pospeste sem"><a href="jks.php?id=75<?php echo $balicek; ?>" data-ajax="false">75 Pospešte sem</a></li>
            <li data-filtertext="76 povedzte nam"><a href="jks.php?id=76<?php echo $balicek; ?>" data-ajax="false">76 Povedzte nám</a></li>
            <li data-filtertext="78 povstante v rychlosti"><a href="jks.php?id=78<?php echo $balicek; ?>" data-ajax="false">78 Povstaňte v rýchlosti</a></li>
            <li data-filtertext="79 pred tebou sa klaniame"><a href="jks.php?id=79<?php echo $balicek; ?>" data-ajax="false">79 Pred tebou sa klaniame</a></li>
            <li data-filtertext="80 sem pastieri pospiechajte"><a href="jks.php?id=80<?php echo $balicek; ?>" data-ajax="false">80 Sem, pastieri, pospiechajte</a></li>
            <li data-filtertext="81 sem pospeste nemeskajte"><a href="jks.php?id=81<?php echo $balicek; ?>" data-ajax="false">81 Sem pospešte, nemeškajte</a></li>
            <li data-filtertext="82 sem sem dietatko"><a href="jks.php?id=82<?php echo $balicek; ?>" data-ajax="false">82 Sem, sem, Dieťatko</a></li>
            <li data-filtertext="83 vitaj o jezisko narodeny"><a href="jks.php?id=83<?php echo $balicek; ?>" data-ajax="false">83 Vitaj, ó, Ježiško narodený</a></li>
            <li data-filtertext="84 spievaj a jasaj zem cela"><a href="jks.php?id=84<?php echo $balicek; ?>" data-ajax="false">84 Spievaj a jasaj, zem celá</a></li>
            <li data-filtertext="85 svetlo svetu dnes nastalo"><a href="jks.php?id=85<?php echo $balicek; ?>" data-ajax="false">85 Svetlo svetu dnes nastalo</a></li>
            <li data-filtertext="86 spasitel sveta zrodil sa"><a href="jks.php?id=86<?php echo $balicek; ?>" data-ajax="false">86 Spasiteľ sveta zrodil sa</a></li>
            <li data-filtertext="87 vec predivna neslychana"><a href="jks.php?id=87<?php echo $balicek; ?>" data-ajax="false">87 Vec predivná, neslýchaná</a></li>
            <li data-filtertext="88 ticha noc"><a href="jks.php?id=88<?php echo $balicek; ?>" data-ajax="false">88 Tichá noc</a></li>
            <li data-filtertext="89 uz slnko z hviezdy vyslo"><a href="jks.php?id=89<?php echo $balicek; ?>" data-ajax="false">89 Už Slnko z hviezdy vyšlo</a></li>
            <li data-filtertext="90 tebe sa tu klaniame"><a href="jks.php?id=90<?php echo $balicek; ?>" data-ajax="false">90 Tebe sa tu klaniame</a></li>
            <li data-filtertext="91 veselost velka"><a href="jks.php?id=91<?php echo $balicek; ?>" data-ajax="false">91 Veselosť veľká</a></li>
            <li data-filtertext="92 vitaj nas jezisko narodeny"><a href="jks.php?id=92<?php echo $balicek; ?>" data-ajax="false">92 Vitaj, náš Ježiško narodený</a></li>
            <li data-filtertext="93 veselym hlasom spievajme"><a href="jks.php?id=93<?php echo $balicek; ?>" data-ajax="false">93 Veselým hlasom spievajme</a></li>
            <li data-filtertext="94 vstavajte pastieri"><a href="jks.php?id=94<?php echo $balicek; ?>" data-ajax="false">94 Vstávajte, pastieri</a></li>
            <li data-filtertext="95 vstavajte pastieri berte sa"><a href="jks.php?id=95<?php echo $balicek; ?>" data-ajax="false">95 Vstávajte, pastieri, berte sa</a></li>
            <li data-filtertext="96 vitame ta svate dieta"><a href="jks.php?id=96<?php echo $balicek; ?>" data-ajax="false">96 Vítame ťa, sväté Dieťa</a></li>
            <li data-filtertext="97 z panny pan jezis je narodeny"><a href="jks.php?id=97<?php echo $balicek; ?>" data-ajax="false">97 Z Panny Pán Ježiš je narodený</a></li>
            <li data-filtertext="98 zvestujem vam radost"><a href="jks.php?id=98<?php echo $balicek; ?>" data-ajax="false">98 Zvestujem vám radosť</a></li>
            <li data-filtertext="99 zaspievajme si veselo"><a href="jks.php?id=99<?php echo $balicek; ?>" data-ajax="false">99 Zaspievajme si veselo</a></li>
            <li data-filtertext="100 narodeny jezu kriste"><a href="jks.php?id=100<?php echo $balicek; ?>" data-ajax="false">100 Narodený Jezu Kriste</a></li>
            <li data-filtertext="101 narodil sa nam"><a href="jks.php?id=101<?php echo $balicek; ?>" data-ajax="false">101 Narodil sa nám</a></li>
            <li data-filtertext="102 dakujeme ochranca nas"><a href="jks.php?id=102<?php echo $balicek; ?>" data-ajax="false">102 Ďakujeme, Ochranca náš</a></li>
            <li data-filtertext="103 mocny je boh nas"><a href="jks.php?id=103<?php echo $balicek; ?>" data-ajax="false">103 Mocný je Boh náš</a></li>
            <li data-filtertext="104 pan casov"><a href="jks.php?id=104<?php echo $balicek; ?>" data-ajax="false">104 Pán časov</a></li>
            <li data-filtertext="105 o jezisu bud k pomoci"><a href="jks.php?id=105<?php echo $balicek; ?>" data-ajax="false">105 Ó, Ježišu, buď k pomoci</a></li>
            <li data-filtertext="106 novy rok bezi"><a href="jks.php?id=106<?php echo $balicek; ?>" data-ajax="false">106 Nový rok beží</a></li>
            <li data-filtertext="107 vesel sa ludske stvorenie"><a href="jks.php?id=107<?php echo $balicek; ?>" data-ajax="false">107 Veseľ sa, ľudské stvorenie</a></li>
            <li data-filtertext="108 z neba prisiel k nam"><a href="jks.php?id=108<?php echo $balicek; ?>" data-ajax="false">108 Z neba prišiel k nám</a></li>
            <li data-filtertext="109 hla aka to hviezda krasna"><a href="jks.php?id=109<?php echo $balicek; ?>" data-ajax="false">109 Hľa, aká to hviezda krásna</a></li>
            <li data-filtertext="110 herodes kralu ukrutny"><a href="jks.php?id=110<?php echo $balicek; ?>" data-ajax="false">110 Herodes, kráľu ukrutný</a></li>
            <li data-filtertext="111 traja krali uzreli"><a href="jks.php?id=111<?php echo $balicek; ?>" data-ajax="false">111 Traja králi uzreli</a></li>
            <li data-filtertext="112 traja slavni krali"><a href="jks.php?id=112<?php echo $balicek; ?>" data-ajax="false">112 Traja slávni králi</a></li>
            <li data-filtertext="113 tri zazraky sa dnes stali"><a href="jks.php?id=113<?php echo $balicek; ?>" data-ajax="false">113 Tri zázraky sa dnes stali</a></li>
            <li data-filtertext="114 jezis sladky dusiam"><a href="jks.php?id=114<?php echo $balicek; ?>" data-ajax="false">114 Ježiš sladký, dušiam</a></li>
            <li data-filtertext="115 jezisu jezisu"><a href="jks.php?id=115<?php echo $balicek; ?>" data-ajax="false">115 Ježišu, Ježišu</a></li>
            <li data-filtertext="116 jezisu vznesena"><a href="jks.php?id=116<?php echo $balicek; ?>" data-ajax="false">116 Ježišu, vznešená</a></li>
            <li data-filtertext="117 kde je jezis"><a href="jks.php?id=117<?php echo $balicek; ?>" data-ajax="false">117 Kde je Ježiš</a></li>
            <li data-filtertext="118 kdes moje spasenie"><a href="jks.php?id=118<?php echo $balicek; ?>" data-ajax="false">118 Kdes’, moje spasenie</a></li>
            <li data-filtertext="119 kde si moj premily"><a href="jks.php?id=119<?php echo $balicek; ?>" data-ajax="false">119 Kde si, môj premilý</a></li>
            <li data-filtertext="120 o jezisu moj priatelu"><a href="jks.php?id=120<?php echo $balicek; ?>" data-ajax="false">120 Ó, Ježišu, môj priateľu</a></li>
            <li data-filtertext="121 co trpiet ma spasitel nas"><a href="jks.php?id=121<?php echo $balicek; ?>" data-ajax="false">121 Čo trpieť má Spasiteľ náš</a></li>
            <li data-filtertext="122 pan boh ktory vsetko stvoril"><a href="jks.php?id=122<?php echo $balicek; ?>" data-ajax="false">122 Pán Boh, ktorý všetko stvoril</a></li>
            <li data-filtertext="123 svaty post sa zapocina"><a href="jks.php?id=123<?php echo $balicek; ?>" data-ajax="false">123 Svätý pôst sa započína</a></li>
            <li data-filtertext="124 ach beda mne nestastnemu"><a href="jks.php?id=124<?php echo $balicek; ?>" data-ajax="false">124 Ach, beda mne nešťastnému</a></li>
            <li data-filtertext="125 pristup pristup sem hriesniku"><a href="jks.php?id=125<?php echo $balicek; ?>" data-ajax="false">125 Pristúp, pristúp sem, hriešniku</a></li>
            <li data-filtertext="126 ach co som to len urobil"><a href="jks.php?id=126<?php echo $balicek; ?>" data-ajax="false">126 Ach, čo som to len urobil</a></li>
            <li data-filtertext="127 ach ja matka zarmutena"><a href="jks.php?id=127<?php echo $balicek; ?>" data-ajax="false">127 Ach, ja Matka zarmútená</a></li>
            <li data-filtertext="128 ach jak vsetko stvorenie"><a href="jks.php?id=128<?php echo $balicek; ?>" data-ajax="false">128 Ach, jak všetko stvorenie</a></li>
            <li data-filtertext="129 ach kriz svaty"><a href="jks.php?id=129<?php echo $balicek; ?>" data-ajax="false">129 Ach, kríž svätý</a></li>
            <li data-filtertext="130 ach mna matku v tejto chvili"><a href="jks.php?id=130<?php echo $balicek; ?>" data-ajax="false">130 Ach, mňa Matku v tejto chvíli</a></li>
            <li data-filtertext="131 ach podte krestania"><a href="jks.php?id=131<?php echo $balicek; ?>" data-ajax="false">131 Ach, poďte kresťania</a></li>
            <li data-filtertext="132 ach preco si zlost"><a href="jks.php?id=132<?php echo $balicek; ?>" data-ajax="false">132 Ach, prečo si, zlosť</a></li>
            <li data-filtertext="133 jezu kriste pane mily"><a href="jks.php?id=133<?php echo $balicek; ?>" data-ajax="false">133 Jezu Kriste, Pane milý</a></li>
            <li data-filtertext="134 ach som zarmuteny"><a href="jks.php?id=134<?php echo $balicek; ?>" data-ajax="false">134 Ach, som zarmútený</a></li>
            <li data-filtertext="135 casto drahe rany svate"><a href="jks.php?id=135<?php echo $balicek; ?>" data-ajax="false">135 Často drahé rany sväté</a></li>
            <li data-filtertext="136 cuj hlas moj hriesniku"><a href="jks.php?id=136<?php echo $balicek; ?>" data-ajax="false">136 Čuj hlas môj, hriešniku</a></li>
            <li data-filtertext="137 cuj svet nebo cela zem"><a href="jks.php?id=137<?php echo $balicek; ?>" data-ajax="false">137 Čuj svet, nebo, celá zem</a></li>
            <li data-filtertext="138 hla v ziali srdca"><a href="jks.php?id=138<?php echo $balicek; ?>" data-ajax="false">138 Hľa, v žiali srdca</a></li>
            <li data-filtertext="139 ini krista opustili"><a href="jks.php?id=139<?php echo $balicek; ?>" data-ajax="false">139 Iní Krista opustili</a></li>
            <li data-filtertext="140 jezisu bud ucteny"><a href="jks.php?id=140<?php echo $balicek; ?>" data-ajax="false">140 Ježišu, buď uctený</a></li>
            <li data-filtertext="141 kazda rana krista pana"><a href="jks.php?id=141<?php echo $balicek; ?>" data-ajax="false">141 Každá rana Krista Pána</a></li>
            <li data-filtertext="142 ked jezisa nevinneho"><a href="jks.php?id=142<?php echo $balicek; ?>" data-ajax="false">142 Keď Ježiša nevinného</a></li>
            <li data-filtertext="143 kristus priklad pokory"><a href="jks.php?id=143<?php echo $balicek; ?>" data-ajax="false">143 Kristus, príklad pokory</a></li>
            <li data-filtertext="144 ktorys za nas trpel"><a href="jks.php?id=144<?php echo $balicek; ?>" data-ajax="false">144 Ktorýs’ za nás trpel</a></li>
            <li data-filtertext="145 maria matka bolestna"><a href="jks.php?id=145<?php echo $balicek; ?>" data-ajax="false">145 Mária, Matka bolestná</a></li>
            <li data-filtertext="146 ku krizu svatemu"><a href="jks.php?id=146<?php echo $balicek; ?>" data-ajax="false">146 Ku krížu svätému</a></li>
            <li data-filtertext="147 maria pod krizom"><a href="jks.php?id=147<?php echo $balicek; ?>" data-ajax="false">147 Mária pod krížom</a></li>
            <li data-filtertext="148 krestania nariekajte"><a href="jks.php?id=148<?php echo $balicek; ?>" data-ajax="false">148 Kresťania, nariekajte</a></li>
            <li data-filtertext="149 nevinnost premila"><a href="jks.php?id=149<?php echo $balicek; ?>" data-ajax="false">149 Nevinnosť premilá</a></li>
            <li data-filtertext="150 matka place ruky spina"><a href="jks.php?id=150<?php echo $balicek; ?>" data-ajax="false">150 Matka plače, ruky spína</a></li>
            <li data-filtertext="151 mizerere mizerere"><a href="jks.php?id=151<?php echo $balicek; ?>" data-ajax="false">151 Mizerere, mizerere</a></li>
            <li data-filtertext="152 moj mily jezisu"><a href="jks.php?id=152<?php echo $balicek; ?>" data-ajax="false">152 Môj milý Ježišu</a></li>
            <li data-filtertext="153 mudrost otca vecneho"><a href="jks.php?id=153<?php echo $balicek; ?>" data-ajax="false">153 Múdrosť Otca večného</a></li>
            <li data-filtertext="154 narieka zalostne"><a href="jks.php?id=154<?php echo $balicek; ?>" data-ajax="false">154 Narieka žalostne</a></li>
            <li data-filtertext="155 o jezisu moj zraneny"><a href="jks.php?id=155<?php echo $balicek; ?>" data-ajax="false">155 Ó, Ježišu môj zranený</a></li>
            <li data-filtertext="156 o hriesnici prestastlivi"><a href="jks.php?id=156<?php echo $balicek; ?>" data-ajax="false">156 Ó, hriešnici prešťastliví</a></li>
            <li data-filtertext="157 o moj boze laskavy"><a href="jks.php?id=157<?php echo $balicek; ?>" data-ajax="false">157 Ó, môj Bože láskavý</a></li>
            <li data-filtertext="158 omsa svata obet zmierna"><a href="jks.php?id=158<?php echo $balicek; ?>" data-ajax="false">158 Omša svätá, obeť zmierna</a></li>
            <li data-filtertext="159 o prevelka milost"><a href="jks.php?id=159<?php echo $balicek; ?>" data-ajax="false">159 Ó, preveľká milosť</a></li>
            <li data-filtertext="160 podakujme kristu panu"><a href="jks.php?id=160<?php echo $balicek; ?>" data-ajax="false">160 Poďakujme Kristu Pánu</a></li>
            <li data-filtertext="161 o zarmutku srdca smutku"><a href="jks.php?id=161<?php echo $balicek; ?>" data-ajax="false">161 Ó, zármutku, srdca smútku</a></li>
            <li data-filtertext="162 podteze hriesnici"><a href="jks.php?id=162<?php echo $balicek; ?>" data-ajax="false">162 Poďteže, hriešnici</a></li>
            <li data-filtertext="163 placte o anjeli"><a href="jks.php?id=163<?php echo $balicek; ?>" data-ajax="false">163 Plačte, ó, anjeli</a></li>
            <li data-filtertext="164 pojdem pojdem hladat budem"><a href="jks.php?id=164<?php echo $balicek; ?>" data-ajax="false">164 Pôjdem, pôjdem, hľadať budem</a></li>
            <li data-filtertext="165 povaz o clovece"><a href="jks.php?id=165<?php echo $balicek; ?>" data-ajax="false">165 Pováž, ó, človeče</a></li>
            <li data-filtertext="166 presvate znamenie presvaty kriz"><a href="jks.php?id=166<?php echo $balicek; ?>" data-ajax="false">166 Presväté znamenie, presvätý kríž</a></li>
            <li data-filtertext="167 pred tron tvoj o kriste"><a href="jks.php?id=167<?php echo $balicek; ?>" data-ajax="false">167 Pred trón tvoj, ó, Kriste</a></li>
            <li data-filtertext="168 o srdce kamenne"><a href="jks.php?id=168<?php echo $balicek; ?>" data-ajax="false">168 Ó, srdce kamenné</a></li>
            <li data-filtertext="169 rozjimajme s pokornostou"><a href="jks.php?id=169<?php echo $balicek; ?>" data-ajax="false">169 Rozjímajme s pokornosťou</a></li>
            <li data-filtertext="170 rozmyslajme dnes"><a href="jks.php?id=170<?php echo $balicek; ?>" data-ajax="false">170 Rozmýšľajme dnes</a></li>
            <li data-filtertext="171 sem dcera sionska"><a href="jks.php?id=171<?php echo $balicek; ?>" data-ajax="false">171 Sem, dcéra sionská</a></li>
            <li data-filtertext="172 stala matka bolestiva"><a href="jks.php?id=172<?php echo $balicek; ?>" data-ajax="false">172 Stála Matka bolestivá</a></li>
            <li data-filtertext="173 s poboznostou oslavujme"><a href="jks.php?id=173<?php echo $balicek; ?>" data-ajax="false">173 S pobožnosťou oslavujme</a></li>
            <li data-filtertext="174 srdce puka od zalosti"><a href="jks.php?id=174<?php echo $balicek; ?>" data-ajax="false">174 Srdce puká od žalosti</a></li>
            <li data-filtertext="175 tvoje muky ospevujem"><a href="jks.php?id=175<?php echo $balicek; ?>" data-ajax="false">175 Tvoje muky ospevujem</a></li>
            <li data-filtertext="176 umucenie draheho pana"><a href="jks.php?id=176<?php echo $balicek; ?>" data-ajax="false">176 Umučenie drahého Pána</a></li>
            <li data-filtertext="177 uz som dost pracoval"><a href="jks.php?id=177<?php echo $balicek; ?>" data-ajax="false">177 Už som dosť pracoval</a></li>
            <li data-filtertext="178 co stanica prva"><a href="jks.php?id=178<?php echo $balicek; ?>" data-ajax="false">178 Čo stanica prvá</a></li>
            <li data-filtertext="179 krestania sem pospiechajte"><a href="jks.php?id=179<?php echo $balicek; ?>" data-ajax="false">179 Kresťania, sem pospiechajte</a></li>
            <li data-filtertext="180 o hlava ubolena"><a href="jks.php?id=180<?php echo $balicek; ?>" data-ajax="false">180 Ó, hlava ubolená</a></li>
            <li data-filtertext="181 rozjimat o umuceni"><a href="jks.php?id=181<?php echo $balicek; ?>" data-ajax="false">181 Rozjímať o umučení</a></li>
            <li data-filtertext="182 jezis kristus slavne vchadza"><a href="jks.php?id=182<?php echo $balicek; ?>" data-ajax="false">182 Ježiš Kristus slávne vchádza</a></li>
            <li data-filtertext="183 kral neba zeme"><a href="jks.php?id=183<?php echo $balicek; ?>" data-ajax="false">183 Kráľ neba, zeme</a></li>
            <li data-filtertext="184 kriste kralu tebe zneju"><a href="jks.php?id=184<?php echo $balicek; ?>" data-ajax="false">184 Kriste, Kráľu, tebe znejú</a></li>
            <li data-filtertext="185 k veceri sa zblizujte"><a href="jks.php?id=185<?php echo $balicek; ?>" data-ajax="false">185 K večeri sa zbližujte</a></li>
            <li data-filtertext="186 prapor krala slavne veje"><a href="jks.php?id=186<?php echo $balicek; ?>" data-ajax="false">186 Prápor Kráľa slávne veje</a></li>
            <li data-filtertext="187 dokonane je"><a href="jks.php?id=187<?php echo $balicek; ?>" data-ajax="false">187 Dokonané je</a></li>
            <li data-filtertext="188 o lude moj narode moj"><a href="jks.php?id=188<?php echo $balicek; ?>" data-ajax="false">188 Ó, ľude môj, národe môj</a></li>
            <li data-filtertext="189 umuceny kristus pan"><a href="jks.php?id=189<?php echo $balicek; ?>" data-ajax="false">189 Umučený Kristus Pán</a></li>
            <li data-filtertext="190 pozri biedny o clovece"><a href="jks.php?id=190<?php echo $balicek; ?>" data-ajax="false">190 Pozri biedny, ó, človeče</a></li>
            <li data-filtertext="191 o tajomstvach umucenia"><a href="jks.php?id=191<?php echo $balicek; ?>" data-ajax="false">191 O tajomstvách umučenia</a></li>
            <li data-filtertext="192 pan jezis kristus vstal z mrtvych"><a href="jks.php?id=192<?php echo $balicek; ?>" data-ajax="false">192 Pán Ježiš Kristus vstal z mŕtvych</a></li>
            <li data-filtertext="193 aleluja radujme sa"><a href="jks.php?id=193<?php echo $balicek; ?>" data-ajax="false">193 Aleluja, radujme sa</a></li>
            <li data-filtertext="194 jezis kristus spasitel nas"><a href="jks.php?id=194<?php echo $balicek; ?>" data-ajax="false">194 Ježiš Kristus, Spasiteľ náš</a></li>
            <li data-filtertext="195 kristus cely zraneny"><a href="jks.php?id=195<?php echo $balicek; ?>" data-ajax="false">195 Kristus celý zranený</a></li>
            <li data-filtertext="196 pan boh vsemohuci z mrtvych vstal"><a href="jks.php?id=196<?php echo $balicek; ?>" data-ajax="false">196 Pán Boh všemohúci z mŕtvych vstal</a></li>
            <li data-filtertext="197 pane mocny"><a href="jks.php?id=197<?php echo $balicek; ?>" data-ajax="false">197 Pane mocný</a></li>
            <li data-filtertext="199 plesaj vsetko stvorenie"><a href="jks.php?id=199<?php echo $balicek; ?>" data-ajax="false">199 Plesaj, všetko stvorenie</a></li>
            <li data-filtertext="200 priblizil sa den radosti"><a href="jks.php?id=200<?php echo $balicek; ?>" data-ajax="false">200 Priblížil sa deň radosti</a></li>
            <li data-filtertext="201 raduj sa cirkev kristova"><a href="jks.php?id=201<?php echo $balicek; ?>" data-ajax="false">201 Raduj sa, Cirkev Kristova</a></li>
            <li data-filtertext="202 radujte sa o krestania"><a href="jks.php?id=202<?php echo $balicek; ?>" data-ajax="false">202 Radujte sa, ó, kresťania</a></li>
            <li data-filtertext="203 radujme sa vsetci zbozne"><a href="jks.php?id=203<?php echo $balicek; ?>" data-ajax="false">203 Radujme sa všetci zbožne</a></li>
            <li data-filtertext="204 spolocne sa dnes radujme"><a href="jks.php?id=204<?php echo $balicek; ?>" data-ajax="false">204 Spoločne sa dnes radujme</a></li>
            <li data-filtertext="205 tretieho dna vstal"><a href="jks.php?id=205<?php echo $balicek; ?>" data-ajax="false">205 Tretieho dňa vstal</a></li>
            <li data-filtertext="206 uteseny nam den nastal"><a href="jks.php?id=206<?php echo $balicek; ?>" data-ajax="false">206 Utešený nám deň nastal</a></li>
            <li data-filtertext="207 v den vzkriesenia jezu krista"><a href="jks.php?id=207<?php echo $balicek; ?>" data-ajax="false">207 V deň vzkriesenia Jezu Krista</a></li>
            <li data-filtertext="208 vitaz kristus"><a href="jks.php?id=208<?php echo $balicek; ?>" data-ajax="false">208 Víťaz Kristus</a></li>
            <li data-filtertext="209 obet svoju velkonocnu"><a href="jks.php?id=209<?php echo $balicek; ?>" data-ajax="false">209 Obeť svoju veľkonočnú</a></li>
            <li data-filtertext="210 zaklad cirkvi je na skale"><a href="jks.php?id=210<?php echo $balicek; ?>" data-ajax="false">210 Základ Cirkvi je na skale</a></li>
            <li data-filtertext="211 zial v radost sa uz premenil"><a href="jks.php?id=211<?php echo $balicek; ?>" data-ajax="false">211 Žiaľ v radosť sa už premenil</a></li>
            <li data-filtertext="212 hla ziarou skvie sa"><a href="jks.php?id=212<?php echo $balicek; ?>" data-ajax="false">212 Hľa, žiarou skvie sa</a></li>
            <li data-filtertext="213 vstupil kristus pan do neba"><a href="jks.php?id=213<?php echo $balicek; ?>" data-ajax="false">213 Vstúpil Kristus Pán do neba</a></li>
            <li data-filtertext="214 kristus pan na nebo vstupil"><a href="jks.php?id=214<?php echo $balicek; ?>" data-ajax="false">214 Kristus Pán na nebo vstúpil</a></li>
            <li data-filtertext="215 povod blaha"><a href="jks.php?id=215<?php echo $balicek; ?>" data-ajax="false">215 Pôvod blaha</a></li>
            <li data-filtertext="216 poprosme ducha svateho"><a href="jks.php?id=216<?php echo $balicek; ?>" data-ajax="false">216 Poprosme Ducha Svätého</a></li>
            <li data-filtertext="217 duchu svaty prid z neba"><a href="jks.php?id=217<?php echo $balicek; ?>" data-ajax="false">217 Duchu Svätý, príď z neba</a></li>
            <li data-filtertext="218 duch svaty sa dnes zjavuje"><a href="jks.php?id=218<?php echo $balicek; ?>" data-ajax="false">218 Duch Svätý sa dnes zjavuje</a></li>
            <li data-filtertext="219 let prosba nasa"><a href="jks.php?id=219<?php echo $balicek; ?>" data-ajax="false">219 Leť, prosba naša</a></li>
            <li data-filtertext="220 o trojica najsvatejsia"><a href="jks.php?id=220<?php echo $balicek; ?>" data-ajax="false">220 Ó, Trojica Najsvätejšia</a></li>
            <li data-filtertext="221 najsvatejsia trojica"><a href="jks.php?id=221<?php echo $balicek; ?>" data-ajax="false">221 Najsvätejšia Trojica</a></li>
            <li data-filtertext="222 o boze otce sveta stvoritelu"><a href="jks.php?id=222<?php echo $balicek; ?>" data-ajax="false">222 Ó, Bože, Otče, sveta Stvoriteľu</a></li>
            <li data-filtertext="223 pri tejto slavnosti"><a href="jks.php?id=223<?php echo $balicek; ?>" data-ajax="false">223 Pri tejto slávnosti</a></li>
            <li data-filtertext="224 nebeske slovo ktore si"><a href="jks.php?id=224<?php echo $balicek; ?>" data-ajax="false">224 Nebeské Slovo, ktoré si</a></li>
            <li data-filtertext="225 o povodca nasho blaha"><a href="jks.php?id=225<?php echo $balicek; ?>" data-ajax="false">225 Ó, Pôvodca nášho blaha</a></li>
            <li data-filtertext="226 vecny nas kral a najvyssi"><a href="jks.php?id=226<?php echo $balicek; ?>" data-ajax="false">226 Večný náš Kráľ a Najvyšší</a></li>
            <li data-filtertext="227 daruj o jezis srdce mne"><a href="jks.php?id=227<?php echo $balicek; ?>" data-ajax="false">227 Daruj, ó, Ježiš, srdce mne</a></li>
            <li data-filtertext="228 nebo i zem vyhlasujte"><a href="jks.php?id=228<?php echo $balicek; ?>" data-ajax="false">228 Nebo i zem, vyhlasujte</a></li>
            <li data-filtertext="229 oslavujme najsvatejsie srdce jezisovo"><a href="jks.php?id=229<?php echo $balicek; ?>" data-ajax="false">229 Oslavujme najsvätejšie Srdce Ježišovo</a></li>
            <li data-filtertext="230 o srdce poklad nebesky"><a href="jks.php?id=230<?php echo $balicek; ?>" data-ajax="false">230 Ó, Srdce, poklad nebeský</a></li>
            <li data-filtertext="231 pozdravujme bozske srdce"><a href="jks.php?id=231<?php echo $balicek; ?>" data-ajax="false">231 Pozdravujme Božské Srdce</a></li>
            <li data-filtertext="232 sem srdce k srdcu dones"><a href="jks.php?id=232<?php echo $balicek; ?>" data-ajax="false">232 Sem srdce k Srdcu dones</a></li>
            <li data-filtertext="233 tisic raz bud pozdravene"><a href="jks.php?id=233<?php echo $balicek; ?>" data-ajax="false">233 Tisíc ráz buď pozdravené</a></li>
            <li data-filtertext="234 vzdajme chvalu cest i slavu"><a href="jks.php?id=234<?php echo $balicek; ?>" data-ajax="false">234 Vzdajme chválu, česť i slávu</a></li>
            <li data-filtertext="235 znej piesen srdcom lasky"><a href="jks.php?id=235<?php echo $balicek; ?>" data-ajax="false">235 Znej, pieseň, srdcom lásky</a></li>
            <li data-filtertext="236 omsa sa uz zacina"><a href="jks.php?id=236<?php echo $balicek; ?>" data-ajax="false">236 Omša sa už začína</a></li>
            <li data-filtertext="237 boze plny laskavosti"><a href="jks.php?id=237<?php echo $balicek; ?>" data-ajax="false">237 Bože, plný láskavosti</a></li>
            <li data-filtertext="238 boze svetov mocny pane"><a href="jks.php?id=238<?php echo $balicek; ?>" data-ajax="false">238 Bože, svetov mocný Pane</a></li>
            <li data-filtertext="239 boze tvojej velebnosti"><a href="jks.php?id=239<?php echo $balicek; ?>" data-ajax="false">239 Bože, tvojej velebnosti</a></li>
            <li data-filtertext="240 dietky srdca nevinneho"><a href="jks.php?id=240<?php echo $balicek; ?>" data-ajax="false">240 Dietky srdca nevinného</a></li>
            <li data-filtertext="241 hlboko sa ti klaniame"><a href="jks.php?id=241<?php echo $balicek; ?>" data-ajax="false">241 Hlboko sa ti klaniame</a></li>
            <li data-filtertext="242 klaniame sa tebe boze"><a href="jks.php?id=242<?php echo $balicek; ?>" data-ajax="false">242 Klaniame sa tebe, Bože</a></li>
            <li data-filtertext="243 krestania sem spiechajte"><a href="jks.php?id=243<?php echo $balicek; ?>" data-ajax="false">243 Kresťania, sem spiechajte</a></li>
            <li data-filtertext="244 k stolu bozej laskavosti"><a href="jks.php?id=244<?php echo $balicek; ?>" data-ajax="false">244 K stolu Božej láskavosti</a></li>
            <li data-filtertext="245 my klaniame sa tebe"><a href="jks.php?id=245<?php echo $balicek; ?>" data-ajax="false">245 My klaniame sa tebe</a></li>
            <li data-filtertext="246 o boze na vysosti"><a href="jks.php?id=246<?php echo $balicek; ?>" data-ajax="false">246 Ó, Bože na výsosti</a></li>
            <li data-filtertext="247 o jezisu nas najmilsi"><a href="jks.php?id=247<?php echo $balicek; ?>" data-ajax="false">247 Ó, Ježišu náš najmilší</a></li>
            <li data-filtertext="248 o trojjediny boze"><a href="jks.php?id=248<?php echo $balicek; ?>" data-ajax="false">248 Ó, trojjediný Bože</a></li>
            <li data-filtertext="249 podte duse s radostou"><a href="jks.php?id=249<?php echo $balicek; ?>" data-ajax="false">249 Poďte, duše s radosťou</a></li>
            <li data-filtertext="250 podte obnovme obetu"><a href="jks.php?id=250<?php echo $balicek; ?>" data-ajax="false">250 Poďte, obnovme obetu</a></li>
            <li data-filtertext="251 pred oltarom tu klakame"><a href="jks.php?id=251<?php echo $balicek; ?>" data-ajax="false">251 Pred oltárom tu kľakáme</a></li>
            <li data-filtertext="252 pred tron lasky"><a href="jks.php?id=252<?php echo $balicek; ?>" data-ajax="false">252 Pred trón lásky</a></li>
            <li data-filtertext="253 rac nas pane zbavit"><a href="jks.php?id=253<?php echo $balicek; ?>" data-ajax="false">253 Ráč nás, Pane, zbaviť</a></li>
            <li data-filtertext="254 zmiluj sa boze z vysosti"><a href="jks.php?id=254<?php echo $balicek; ?>" data-ajax="false">254 Zmiluj sa, Bože, z výsosti</a></li>
            <li data-filtertext="255 svatu obet zaciname"><a href="jks.php?id=255<?php echo $balicek; ?>" data-ajax="false">255 Svätú obeť začíname</a></li>
            <li data-filtertext="256 tu skruseni v prach padame"><a href="jks.php?id=256<?php echo $balicek; ?>" data-ajax="false">256 Tu skrúšení v prach padáme</a></li>
            <li data-filtertext="257 ty si pane v kazdom chrame"><a href="jks.php?id=257<?php echo $balicek; ?>" data-ajax="false">257 Ty si, Pane, v každom chráme</a></li>
            <li data-filtertext="258 vstupujem do chramu"><a href="jks.php?id=258<?php echo $balicek; ?>" data-ajax="false">258 Vstupujem do chrámu</a></li>
            <li data-filtertext="259 zacina sa konat"><a href="jks.php?id=259<?php echo $balicek; ?>" data-ajax="false">259 Začína sa konať</a></li>
            <li data-filtertext="260 poklakni na kolena"><a href="jks.php?id=260<?php echo $balicek; ?>" data-ajax="false">260 Pokľakni na kolená</a></li>
            <li data-filtertext="261 ach laska prevelka"><a href="jks.php?id=261<?php echo $balicek; ?>" data-ajax="false">261 Ach, láska preveľká</a></li>
            <li data-filtertext="262 ach vitaj vitaj nam"><a href="jks.php?id=262<?php echo $balicek; ?>" data-ajax="false">262 Ach, vitaj, vitaj, nám</a></li>
            <li data-filtertext="263 bud vzdy pozdravena"><a href="jks.php?id=263<?php echo $balicek; ?>" data-ajax="false">263 Buď vždy pozdravená</a></li>
            <li data-filtertext="264 bud vzdy pozdravene"><a href="jks.php?id=264<?php echo $balicek; ?>" data-ajax="false">264 Buď vždy pozdravené</a></li>
            <li data-filtertext="265 ctim teba pobozne"><a href="jks.php?id=265<?php echo $balicek; ?>" data-ajax="false">265 Ctím teba pobožne</a></li>
            <li data-filtertext="266 daj nam svate pozehnanie"><a href="jks.php?id=266<?php echo $balicek; ?>" data-ajax="false">266 Daj nám sväté požehnanie</a></li>
            <li data-filtertext="267 hostiu vitajme"><a href="jks.php?id=267<?php echo $balicek; ?>" data-ajax="false">267 Hostiu vítajme</a></li>
            <li data-filtertext="268 chvala tebe o boze"><a href="jks.php?id=268<?php echo $balicek; ?>" data-ajax="false">268 Chvála tebe, ó, Bože</a></li>
            <li data-filtertext="269 chval sione spasitela"><a href="jks.php?id=269<?php echo $balicek; ?>" data-ajax="false">269 Chváľ, Sione, Spasiteľa</a></li>
            <li data-filtertext="270 klaniam sa ti vrucne"><a href="jks.php?id=270<?php echo $balicek; ?>" data-ajax="false">270 Klaniam sa ti vrúcne</a></li>
            <li data-filtertext="271 ktory na oltari"><a href="jks.php?id=271<?php echo $balicek; ?>" data-ajax="false">271 Ktorý na oltári</a></li>
            <li data-filtertext="272 kriste zo srdca celeho"><a href="jks.php?id=272<?php echo $balicek; ?>" data-ajax="false">272 Kriste, zo srdca celého</a></li>
            <li data-filtertext="273 lasky plni serafini"><a href="jks.php?id=273<?php echo $balicek; ?>" data-ajax="false">273 Lásky plní Serafíni</a></li>
            <li data-filtertext="274 na kolena padame"><a href="jks.php?id=274<?php echo $balicek; ?>" data-ajax="false">274 Na kolená padáme</a></li>
            <li data-filtertext="275 nepochopitelne nesmierne tajomstvo"><a href="jks.php?id=275<?php echo $balicek; ?>" data-ajax="false">275 Nepochopiteľné, nesmierne tajomstvo</a></li>
            <li data-filtertext="276 o boze pane nas z vysokosti"><a href="jks.php?id=276<?php echo $balicek; ?>" data-ajax="false">276 Ó, Bože, Pane náš z vysokosti</a></li>
            <li data-filtertext="277 o jezisu nas najmilsi"><a href="jks.php?id=277<?php echo $balicek; ?>" data-ajax="false">277 Ó, Ježišu náš najmilší</a></li>
            <li data-filtertext="278 o laska nadej spasa"><a href="jks.php?id=278<?php echo $balicek; ?>" data-ajax="false">278 Ó, láska, nádej, spása</a></li>
            <li data-filtertext="279 o mili krestania"><a href="jks.php?id=279<?php echo $balicek; ?>" data-ajax="false">279 Ó, milí kresťania</a></li>
            <li data-filtertext="280 o vitaj jezisu ty chlieb zivy"><a href="jks.php?id=280<?php echo $balicek; ?>" data-ajax="false">280 Ó, vitaj, Ježišu ty chlieb živý</a></li>
            <li data-filtertext="281 pozdravena bud sviatost oltarna"><a href="jks.php?id=281<?php echo $balicek; ?>" data-ajax="false">281 Pozdravená buď, Sviatosť oltárna</a></li>
            <li data-filtertext="282 pred tebou jezisu"><a href="jks.php?id=282<?php echo $balicek; ?>" data-ajax="false">282 Pred tebou Ježišu</a></li>
            <li data-filtertext="283 radostou oplyvam"><a href="jks.php?id=283<?php echo $balicek; ?>" data-ajax="false">283 Radosťou oplývam</a></li>
            <li data-filtertext="284 radujme sa o krestania"><a href="jks.php?id=284<?php echo $balicek; ?>" data-ajax="false">284 Radujme sa, ó, kresťania</a></li>
            <li data-filtertext="285 slovu nekonecnemu"><a href="jks.php?id=285<?php echo $balicek; ?>" data-ajax="false">285 Slovu nekonečnému</a></li>
            <li data-filtertext="286 z neba na zem zostupujte"><a href="jks.php?id=286<?php echo $balicek; ?>" data-ajax="false">286 Z neba na zem zostupujte</a></li>
            <li data-filtertext="287 z neba stupte anjeli"><a href="jks.php?id=287<?php echo $balicek; ?>" data-ajax="false">287 Z neba stúpte, anjeli</a></li>
            <li data-filtertext="288 tebe zijem jezis moj"><a href="jks.php?id=288<?php echo $balicek; ?>" data-ajax="false">288 Tebe žijem, Ježiš môj</a></li>
            <li data-filtertext="289 z tronu slavy zostupuje"><a href="jks.php?id=289<?php echo $balicek; ?>" data-ajax="false">289 Z trónu slávy zostupuje</a></li>
            <li data-filtertext="290 telo krista a krv svata"><a href="jks.php?id=290<?php echo $balicek; ?>" data-ajax="false">290 Telo Krista a krv svätá</a></li>
            <li data-filtertext="291 velebme krestania"><a href="jks.php?id=291<?php echo $balicek; ?>" data-ajax="false">291 Velebme, kresťania</a></li>
            <li data-filtertext="292 velebime kriste teba"><a href="jks.php?id=292<?php echo $balicek; ?>" data-ajax="false">292 Velebíme, Kriste, teba</a></li>
            <li data-filtertext="293 velku milost udelujes"><a href="jks.php?id=293<?php echo $balicek; ?>" data-ajax="false">293 Veľkú milosť udeľuješ</a></li>
            <li data-filtertext="294 z hlbin srdca skruseneho"><a href="jks.php?id=294<?php echo $balicek; ?>" data-ajax="false">294 Z hlbín srdca skrúšeného</a></li>
            <li data-filtertext="295 vitaj mily jezu kriste"><a href="jks.php?id=295<?php echo $balicek; ?>" data-ajax="false">295 Vitaj milý Jezu Kriste</a></li>
            <li data-filtertext="296 vitaj najsvatejsie"><a href="jks.php?id=296<?php echo $balicek; ?>" data-ajax="false">296 Vitaj, najsvätejšie</a></li>
            <li data-filtertext="297 zavitaj z nebies vysosti"><a href="jks.php?id=297<?php echo $balicek; ?>" data-ajax="false">297 Zavítaj z nebies výsosti</a></li>
            <li data-filtertext="298 vitaj spasa dusi"><a href="jks.php?id=298<?php echo $balicek; ?>" data-ajax="false">298 Vitaj, spása duší</a></li>
            <li data-filtertext="299 zdrav bud kriste najmocnejsi"><a href="jks.php?id=299<?php echo $balicek; ?>" data-ajax="false">299 Zdrav’ buď Kriste najmocnejší</a></li>
            <li data-filtertext="300 jezis jezis prid ku mne"><a href="jks.php?id=300<?php echo $balicek; ?>" data-ajax="false">300 Ježiš, Ježiš, príď ku mne</a></li>
            <li data-filtertext="301 prid o pane mily"><a href="jks.php?id=301<?php echo $balicek; ?>" data-ajax="false">301 Príď, ó, Pane milý</a></li>
            <li data-filtertext="302 o pane nie som hodny"><a href="jks.php?id=302<?php echo $balicek; ?>" data-ajax="false">302 Ó, Pane, nie som hodný</a></li>
            <li data-filtertext="303 dusa kristova posvat ma"><a href="jks.php?id=303<?php echo $balicek; ?>" data-ajax="false">303 Duša Kristova, posväť ma</a></li>
            <li data-filtertext="312 raduj sa nebies kralovna"><a href="jks.php?id=312<?php echo $balicek; ?>" data-ajax="false">312 Raduj sa, nebies Kráľovná</a></li>
            <li data-filtertext="317 ctime tuto sviatost slavnu"><a href="jks.php?id=317<?php echo $balicek; ?>" data-ajax="false">317 Ctime túto Sviatosť slávnu</a></li>
            <li data-filtertext="330 anjelskym pozdravenim"><a href="jks.php?id=330<?php echo $balicek; ?>" data-ajax="false">330 Anjelským pozdravením</a></li>
            <li data-filtertext="332 cela krasna si maria"><a href="jks.php?id=332<?php echo $balicek; ?>" data-ajax="false">332 Celá krásna si, Mária</a></li>
            <li data-filtertext="337 k marii volame"><a href="jks.php?id=337<?php echo $balicek; ?>" data-ajax="false">337 K Márii voláme</a></li>
            <li data-filtertext="338 kralovna bud pozdravena"><a href="jks.php?id=338<?php echo $balicek; ?>" data-ajax="false">338 Kráľovná, buď pozdravená</a></li>
            <li data-filtertext="343 maria najcistejsia"><a href="jks.php?id=343<?php echo $balicek; ?>" data-ajax="false">343 Mária najčistejšia</a></li>
            <li data-filtertext="344 maria ochrana"><a href="jks.php?id=344<?php echo $balicek; ?>" data-ajax="false">344 Mária, ochrana</a></li>
            <li data-filtertext="349 matka pana krista"><a href="jks.php?id=349<?php echo $balicek; ?>" data-ajax="false">349 Matka Pána Krista</a></li>
            <li data-filtertext="359 o maria primluvnica nasa"><a href="jks.php?id=359<?php echo $balicek; ?>" data-ajax="false">359 Ó, Mária, Prímluvnica naša</a></li>
            <li data-filtertext="370 radostou je moje srdce"><a href="jks.php?id=370<?php echo $balicek; ?>" data-ajax="false">370 Radosťou je moje srdce</a></li>
            <li data-filtertext="376 slavna si kralovna"><a href="jks.php?id=376<?php echo $balicek; ?>" data-ajax="false">376 Slávna si, Kráľovná</a></li>
            <li data-filtertext="383 tisic raz pozdravujeme teba"><a href="jks.php?id=383<?php echo $balicek; ?>" data-ajax="false">383 Tisíc ráz pozdravujeme teba</a></li>
            <li data-filtertext="388 zaznite piesnou udolia"><a href="jks.php?id=388<?php echo $balicek; ?>" data-ajax="false">388 Zaznite piesňou, údolia</a></li>
            <li data-filtertext="394 o maria bolestiva"><a href="jks.php?id=394<?php echo $balicek; ?>" data-ajax="false">394 Ó, Mária bolestivá</a></li>
            <li data-filtertext="399 kvetinky majove"><a href="jks.php?id=399<?php echo $balicek; ?>" data-ajax="false">399 Kvetinky májové</a></li>
            <li data-filtertext="403 pocuvajte vrucny hlas"><a href="jks.php?id=403<?php echo $balicek; ?>" data-ajax="false">403 Počúvajte vrúcny hlas</a></li>
            <li data-filtertext="411 o maria kralovna ruzencova"><a href="jks.php?id=411<?php echo $balicek; ?>" data-ajax="false">411 Ó, Mária, Kráľovná ružencová</a></li>
            <li data-filtertext="415 spievajme marii"><a href="jks.php?id=415<?php echo $balicek; ?>" data-ajax="false">415 Spievajme Márii</a></li>
            <li data-filtertext="417 hla otvara sa brana nebies"><a href="jks.php?id=417<?php echo $balicek; ?>" data-ajax="false">417 Hľa, otvára sa brána nebies</a></li>
            <li data-filtertext="429 svaty peter svaty pavol"><a href="jks.php?id=429<?php echo $balicek; ?>" data-ajax="false">429 Svätý Peter, svätý Pavol</a></li>
            <li data-filtertext="462 boze vyslys prosby nase"><a href="jks.php?id=462<?php echo $balicek; ?>" data-ajax="false">462 Bože, vyslyš prosby naše</a></li>
            <li data-filtertext="468 odpocinku vecneho daj"><a href="jks.php?id=468<?php echo $balicek; ?>" data-ajax="false">468 Odpočinku večného daj</a></li>
            <li data-filtertext="493 otce nas"><a href="jks.php?id=493<?php echo $balicek; ?>" data-ajax="false">493 Otče náš</a></li>
            <li data-filtertext="498 jezisu kralu"><a href="jks.php?id=498<?php echo $balicek; ?>" data-ajax="false">498 Ježišu, Kráľu</a></li>
            <li data-filtertext="523 v sedmobreznom kruhu rima"><a href="jks.php?id=523<?php echo $balicek; ?>" data-ajax="false">523 V sedmobrežnom kruhu Ríma</a></li>
            <li data-filtertext="524 boze cos racil"><a href="jks.php?id=524<?php echo $balicek; ?>" data-ajax="false">524 Bože, čos’ ráčil</a></li>
          </ul>
          <form action="index.php" method="GET" data-ajax="false">
            <fieldset data-role="controlgroup">
              <legend>Nastavenia stránky</legend>
              <label for="tm">Tmavá téma</label>
              <input name="tm" id="tm" type="checkbox" value="1" <?php if(!empty($_GET['tm']) && $_GET['tm'] == 1) { echo $checked; } ?>>
              <label for="st">Stránkovanie piesne</label>
              <input name="st" id="st" type="checkbox" value="1" <?php if(!empty($_GET['st']) && $_GET['st'] == 1) { echo $checked; } ?>>
              <label for="vr">Veršovanie strofy</label>
              <input name="vr" id="vr" type="checkbox" value="1" <?php if(!empty($_GET['vr']) && $_GET['vr'] == 1) { echo $checked; } ?>>
              <label for="nastavit">Nastaviť</label>
              <button class="ui-btn ui-icon-check ui-btn-icon-left" type="submit" id="nastavit">Nastaviť</button>
            </fieldset>
          </form>
        </p>
      </div>
      <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
          <ul>
            <li><a href="#" data-icon="search" class="ui-state-disabled"></a></li>
            <li><a href="#info" data-icon="info"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <div data-role="page" id="info" class="<?php echo $trieda_temy; ?>">
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
          Ak by ste stránku vedeli vylepšiť, prípadne chcete len opraviť chybu, jej zdrojový kód je voľne dostupný na <a href="https://github.com/stanislavbebej/ejks.git" target="_blank" rel="noopener noreferrer">GitHub</a>. Testovacia verzia stránky beží v <a href="https://ejks-sk-q4it3p4hba-ew.a.run.app/" target="_blank" rel="noopener noreferrer">Google Cloud Run</a>.
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
            <li><a href="#domov" data-icon="search"></a></li>
            <li><a href="#" data-icon="info" class="ui-state-disabled"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
