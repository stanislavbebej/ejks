<?php
  $balicek = "";

  if(!empty($_GET['tm'])) {
    if($_GET['tm'] == 1) {
      $balicek = $balicek."&tm=1";
      $trieda_temy = "ui-page-theme-b";
    } else {
      $balicek = $balicek."&tm=0";
      $trieda_temy = "ui-page-theme-a";
    }
  } else {
    $trieda_temy = "ui-page-theme-a";
  }

  if(!empty($_GET['st'])) {
    if($_GET['st'] == 1) {
      $balicek = $balicek."&st=1";
      $paging = 1;
    } else {
      $balicek = $balicek."&st=0";
      $paging = 0;
    }
  } else {
    $paging = 0;
  }

  if(!empty($_GET['vr'])) {
    if($_GET['vr'] == 1) {
      $balicek = $balicek."&vr=1";
      $verse = 1;
    } else {
      $balicek = $balicek."&vr=0";
      $verse = 0;
    }
  } else {
    $verse = 0;
  }

  if(!empty($_GET['fs'])) {
    $font_size = $_GET['fs'];
    $balicek = $balicek."&fs=".$font_size;
  } else {
    $font_size = "1.5";
  }
?>
