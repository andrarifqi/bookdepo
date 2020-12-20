<?php
include_once("dbconnect.php");

$title = $_GET['title']; 
$author = $_GET['author']; 
$price = $_GET['price'];
$description = $_GET['description'];
$publisher = $_GET['publisher'];
$isbn = $_GET['isbn'];
  
    try {
    $sql = "INSERT INTO book(title, author, price, description, publisher, isbn)
    VALUES ('$title', '$author', '$price','$description','$publisher','$isbn')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "<script> alert('Add book success')</script>";
    echo "<script> window.location.replace('index.php') </script>;";
  } catch(PDOException $e) {
    echo "<script> alert('Add book failed')</script>";
    echo "<script> window.location.replace('newbook.html') </script>;";
  }
  
  $conn = null;
  
?>