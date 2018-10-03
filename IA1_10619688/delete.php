!<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" dir="ltr">
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <style>
     body{
      /*background-image: url('imgs/material3.png');*/
      background-image: url('imgs/flow.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      max-width: 100%;
      height: auto;
      

    }
    </style>

  </head>
  <body>
  <?php include 'header.php';?>
    <?php require_once 'process.php'; ?>

    <?php
      if(isset($_SESSION['message'])): ?>

      <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
        ?>

      </div>
    <?php endif ?>
    <div class="container">

    <?php
      $mysqli = new mysqli('localhost','root','','demo') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
      // pre_r($result);
      ?>

      <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <!-- <th>Index</th> -->
              <th style="color: blue; font-size: larger;">Name</th>
              <th style="color: blue; font-size: larger;">Student ID</th>
              <th style="color: blue; font-size: larger;">Mother's Name</th>
              <th style="color: blue; font-size: larger;">Father's Name</th>
              <th style="color: blue; font-size: larger;" colspan="2">Action</th>
            </tr>
          </thead>

          <?php
              while ($row = $result->fetch_assoc()): ?>

            <tr>
              <!-- <td><?php //echo $row['id']; ?></td> -->
              <td style="color: blue; font-size:larger;"><?php echo $row['name']; ?></td>
              <td style="color: blue; font-size: larger;"><?php echo $row['stid']; ?></td>
              <td style="color: blue; font-size: larger;"><?php echo $row['mother']; ?></td>
              <td style="color: blue; font-size: larger;"><?php echo $row['father']; ?></td>
              <td>
                
                <a href="process.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
              </td>

            </tr>

          <?php endwhile; ?>
        </table>
      </div>

      <?php

      function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }

     ?>

   
  </div>


  <footer>
  <ul>
    <li style="color: crimson;"><a href="add.php">Add Records</a> </li>
    <li style="color: crimson;"><a href="view.php">View Records</a> </li>
    <li style="color: crimson;"><a href="edit.php">Edit Records</a> </li>
  </ul>
</footer>


  <address style="color: white">
  Author: Edudzi Mamattah
</address>
  </body>
</html>
