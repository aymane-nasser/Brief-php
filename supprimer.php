<?php
 require_once('connect.php');
if (isset($_GET['id'])) {
 
  
    $id = $_GET['id'];

    $sql = "DELETE FROM produit
          WHERE id=$id";
    $result = mysqli_query($db, $sql);
    if ($result) {
        header("Location: ./produit.php?produit=successfully deleted");
    }
} else {
    header("Location: ./produit.php");
}