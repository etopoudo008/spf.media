<?php


$id = $_GET["id"];
$tableName = $_GET["data"];

  $DBhost = "localhost";
  $DBuser = "opix_media";
  $DBpass = "sECU006i";
  $DBname = "opix_media";

  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

$result = $DBcon->query("DELETE FROM $tableName WHERE rID=$id");

 header("Location: analytics2.php");
?>