!<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" dir="ltr">
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <style>
    body{
      background-image: url('imgs/material.jpg');
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

    
          <?php
              while ($row = $result->fetch_assoc()): ?>

            
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

    <div class="row justify-content-center">
      <form class="" action="process.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $id;?>">
          <div class="form-group">
            <label for="" style="color: crimson;">Name</label>
            <input class="form-control" type="text" name="name" placeholder="Enter your name" value="<?php echo $name;?>">
          </div>

          <div class="form-group">
            <label for="" style="color: crimson;">Student ID</label>
            <input class="form-control" type="text" name="stid" placeholder="Enter your Student ID" value="<?php echo $stid; ?>">
          </div>

          <div class="form-group">
            <label for="" style="color: crimson;">Mother's Name</label>
            <input class="form-control" type="text" name="mother" placeholder="Enter your mother's name" value="<?php echo $mother; ?>">
          </div>

          <div class="form-group">
            <label for="" style="color: crimson;">Father's Name</label>
            <input class="form-control" type="text" name="father" placeholder="Enter your father's name" value="<?php echo $father; ?>">
          </div>

          <div class="form-group">
            <?php
              if ($update == true):
           ?>
            <button class="btn btn-info" type="submit" name="update">Update</button>
          <?php else: ?>

            <button class="btn btn-primary" type="submit" name="save" >Save</button>
          <?php endif; ?>
          </div>
      </form>
    </div>


  </div>





  <footer>
  <ul>
    <li><a href="delete.php" style="color: red">Delete Records</a> </li>
    <li><a href="view.php" style="color: red">View Records</a> </li>
    <li><a href="edit.php" style="color: red">Edit Records</a> </li>
  </ul>
</footer>
  <address style="color: red">
  Author: Edudzi Mamattah
</address>
  </body>
</html>
