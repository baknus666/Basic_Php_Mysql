<?php
  require_once("database.php");
  
  $xnote = $_POST['notes'];
  $simpan=inputdata("INSERT INTO notes VALUES (null,'$xnote', now())");
  if ($simpan) {
    header("location:list_notes.php");
  }
?>