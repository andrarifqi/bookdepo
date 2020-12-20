<?php
include_once("dbconnect.php");

if (isset($_GET['operation'])) {
    $id = $_GET['id'];
    try {
      $sql = "DELETE FROM book WHERE id='$id'";
      $conn->exec($sql);
      echo "<script> alert('Delete Success')</script>";
      echo "<script> window.location.replace('index.php?id=".$book['id']."') </script>;";
    } catch(PDOException $e) {
      echo "<script> alert('Delete Error')</script>";
    }
  } 
?>