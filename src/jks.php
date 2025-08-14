<?php
if (empty($_GET['id'])) {
  header("Location: index.html");
} else if (is_numeric($_GET['id']) && intval($_GET['id']) < 1000 && intval($_GET['id']) > 0) {
  $piesen = htmlspecialchars(trim($_GET['id']));
} else {
  header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="sk" xml:lang="sk">

<head>
  <title><?php printf("Jednotný Katolícky Spevník, pieseň číslo %d", $piesen); ?></title>
  <?php include "header.php"; ?>
  <style>
    p.strofa {
      text-align: center;
      font-size: 1.5em;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div data-role="page" id="piesen_<?php echo $piesen ?>" class="ui-page-theme-b">
    <div data-role="header">
      <h1><?php echo $piesen ?></h1>
      <a href="./" class="ui-btn-right ui-btn ui-btn-icon-notext ui-icon-search"></a>
    </div>
    <div role="main" class="ui-content">
      <?php
      $db  = new SQLite3("jks.db");
      $stm = $db->prepare('SELECT strofa, text FROM jks WHERE cislo = ? ORDER BY strofa');
      $stm->bindValue(1, $piesen, SQLITE3_INTEGER);
      $result = $stm->execute();

      while ($row = $result->fetchArray()) {
        if ($row["strofa"] != 0) {
          printf('<p class="strofa">%s. %s</p><br>%s', $row["strofa"], $row["text"], "\n");
        }
      }

      $result->finalize();
      $db->close();
      ?>
    </div>
  </div>
</body>

</html>
