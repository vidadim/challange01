﻿<?php 
  include 'db.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM users WHERE id='$id'";
  mysqli_query($connection,$sql);
  header ("Location:admin_page.php")

 ?>