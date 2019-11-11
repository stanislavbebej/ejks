<?php
  include "flags.php";

  if(empty($_GET['id'])) { header("Location: index.php"); }
  else if(is_numeric($_GET['id']) && intval($_GET['id']) < 1000 && intval($_GET['id']) > 0) { $piesen = htmlspecialchars(trim($_GET['id'])); }
  else { header("Location: index.php"); }

  include "config.php";

  $strofa = "strofa";
?>

<!DOCTYPE html>
<html lang="sk" xml:lang="sk">
  <head>
    <title><?php printf("Jednotný Katolícky Spevník, pieseň číslo %d", $piesen); ?></title>
    <?php include "header.php"; ?>
    <style>
      p.strofa {
        text-align: center;
        font-size: <?php echo $font_size; ?>em;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
  <?php
    $db  = new SQLite3($jks_database);
    $stm = $db->prepare('SELECT strofa, text FROM jks WHERE cislo = ? ORDER BY strofa');
    $stm->bindValue(1, $piesen, SQLITE3_INTEGER);
    $result = $stm->execute();

    // Count rows in result
    while($row = $result->fetchArray()) {
      $number_of_rows += 1;
    }

    $result->reset();

    if($number_of_rows > 0) {
      if($paging == 1) {
        while($row = $result->fetchArray()) {
          if($row[$strofa] == 0) {  /*riadok strofa = 0 obsahuje nazov piesne*/
            $nazov_piesne = $row["text"];
          } else {
            printf("<div data-role=\"page\" id=\"piesen_%d_strofa_%d\" class=\"%s\">\n", $piesen, $row[$strofa], $trieda_temy);
            printf("  <div data-role=\"header\">\n");
            printf("    <h1>%d</h1>\n", $piesen);
            printf("    <a href=\"#\" class=\"ui-btn-right ui-btn ui-btn-icon-notext ui-icon-recycle resetFont\"></a>\n");
            printf("  </div>\n");
            printf("  <div role=\"main\" class=\"ui-content\">\n");
            printf("    <p class=\"strofa\">%s. %s</p><br>\n", $row[$strofa], ($verse == 1?str_replace(" - ", " <br> ", $row["text"]):$row["text"]));
            printf("  </div>\n");
            printf("  <div data-role=\"footer\" data-position=\"fixed\">\n");
            printf("    <div data-role=\"navbar\">\n");
            printf("      <ul>\n");
            if($row[$strofa] == 1) { printf("        <li><a href=\"#\" data-icon=\"arrow-l\" class=\"ui-state-disabled\"></a></li>\n"); } /* pred prvou strofou nie je ina strofa */
            else { printf("        <li><a href=\"#piesen_%d_strofa_%d\" data-icon=\"arrow-l\"></a></li>\n", $piesen, $row[$strofa]-1); }
            printf("        <li><a href=\"#\" data-icon=\"minus\" class=\"decreaseFont\"></a></li>\n");
            printf("        <li><a href=\"index.php?%s\" data-icon=\"search\" data-ajax=\"false\"></a></li>\n", $balicek);
            printf("        <li><a href=\"#\" data-icon=\"plus\" class=\"increaseFont\"></a></li>\n");
            if($row[$strofa] == $number_of_rows-1) { printf("        <li><a href=\"#\" data-icon=\"arrow-r\" class=\"ui-state-disabled\"></a></li>\n"); } /* za poslednou strofou nie je ina strofa */
            else { printf("        <li><a href=\"#piesen_%d_strofa_%d\" data-icon=\"arrow-r\"></a></li>\n", $piesen, $row[$strofa]+1); }
            printf("      </ul>\n");
            printf("    </div>\n");
            printf("  </div>\n");
            printf("</div>\n");
          }
        }
      } else {
        printf("<div data-role=\"page\" id=\"piesen_%d\" class=\"%s\">\n", $piesen, $trieda_temy);
        printf("  <div data-role=\"header\">\n");
        printf("    <h1>%d</h1>\n", $piesen);
        printf("    <a href=\"#\" class=\"ui-btn-right ui-btn ui-btn-icon-notext ui-icon-recycle resetFont\"></a>\n");
        printf("  </div>\n");
        printf("  <div role=\"main\" class=\"ui-content\">\n");

        while($row = $result->fetchArray()) {
          if($row[$strofa] != 0) { printf("    <p class=\"strofa\">%s. %s</p><br>\n", $row[$strofa], ($verse == 1?str_replace(" - ", " <br> ", $row["text"]):$row["text"])); }
        }

        printf("  </div>\n");
        printf("  <div data-role=\"footer\" data-position=\"fixed\">\n");
        printf("    <div data-role=\"navbar\">\n");
        printf("      <ul>\n");
        printf("        <li><a href=\"#\" data-icon=\"minus\" class=\"decreaseFont\"></a></li>\n");
        printf("        <li><a href=\"index.php?%s\" data-icon=\"search\" data-ajax=\"false\"></a></li>\n", $balicek);
        printf("        <li><a href=\"#\" data-icon=\"plus\" class=\"increaseFont\"></a></li>\n");
        printf("      </ul>\n");
        printf("    </div>\n");
        printf("  </div>\n");
        printf("</div>\n");
      }

      $result->finalize();
    } else {
      echo "Výsledok obsahuje 0 záznamov\n";
    }

    $db->close();
  ?>
  </body>
</html>
