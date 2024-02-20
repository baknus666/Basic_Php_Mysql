<?php
require_once("database.php");
session_start();
$xnote = $_POST['notes'];
$id_user = $_SESSION['id_user'];
// var_dump($id_user);
$simpan = inputdata("INSERT INTO notes VALUES (null,'$xnote', now(), $id_user)");
if ($simpan) {
  header("location:list_notes.php");
} else {
  echo "Gagal memasukan data baru";
}
