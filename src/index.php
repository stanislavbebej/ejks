<?php
$transform_array = array(
  ',' => '', '’' => '', '–' => '',
  'á' => 'a', 'ä' => 'a', 'A' => 'a',
  'č' => 'c', 'Č' => 'C',
  'ď' => 'd', 'Ď' => 'D',
  'é' => 'e', 'É' => 'E',
  'í' => 'i', 'Í' => 'I',
  'ĺ' => 'l', 'ľ' => 'l', 'Ľ' => 'L',
  'ň' => 'n', 'Ň' => 'N',
  'ó' => 'o', 'ô' => 'o', 'Ó' => 'o',
  'ŕ' => 'r',
  'š' => 's', 'Š' => 'S',
  'ť' => 't', 'Ť' => 'T',
  'ú' => 'u', 'Ú' => 'U',
  'ý' => 'y',
  'ž' => 'z', 'Ž' => 'Z'
);
?>

<!DOCTYPE html>
<html lang="sk" xml:lang="sk">

<head>
  <title>Hľadať podľa čísla piesne</title>
  <?php include "header.php"; ?>
  <style>
    .ui-header .ui-title {
      margin-right: 15%;
      margin-left: 15%;
    }
  </style>
</head>

<body>
  <div data-role="page" id="domov" class="ui-page-theme-b">
    <div data-role="header">
      <h1>Jednotný Katolícky Spevník</h1>
    </div>
    <div role="main" class="ui-content" aria-label="Home page">
      <p>
      <form>
        <input type="text" data-type="search" name="cislo_piesne" id="cislo_piesne" data-clear-btn="true" placeholder="Hľadať podľa čísla piesne" autofocus>
      </form>
      <ul data-role="listview" data-filter="true" data-filter-reveal="true" data-inset="true" data-input="#cislo_piesne">
        <?php
        $db = new SQLite3("jks.db");
        $result = $db->query('SELECT cislo, text FROM jks WHERE strofa = 0 ORDER BY cislo');

        while ($row = $result->fetchArray()) {
          printf(
            '<li data-filtertext="%d %s %s"><a href="%d.html" data-ajax="false">%d %s</a></li>%s',
            $row['cislo'],
            strtolower(strtr(trim($row['text']), $transform_array)),
            trim($row['text']),
            $row['cislo'],
            $row['cislo'],
            $row['text'],
            "\n"
          );
        }

        $result->finalize();
        $db->close();
        ?>
      </ul>
      </p>
    </div>
    <div data-role="footer" data-position="fixed">
      <div data-role="navbar">
        <ul>
          <li><a href="/" data-icon="search" class="ui-state-disabled"></a></li>
          <li><a href="info.html" data-icon="info" data-transition="none"></a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>
