!<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" dir="ltr">
    <title>PHP CRUD</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <style>
      body{
        background-image: url('imgs/camaro.jpg');
        max-height: 100%;
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
              <th colspan="2" style="color: blue; font-size: larger;">Action</th>
             
            </tr>
          </thead>

          <?php
              while ($row = $result->fetch_assoc()): ?>

            <tr>
              <!-- <td><?php //echo $row['id']; ?></td> -->
              <td style="color: ghostwhite; font-size: larger;"><?php echo $row['name']; ?></td>
              <td style="color: ghostwhite; font-size: larger;"><?php echo $row['stid']; ?></td>
              <td style="color: ghostwhite; font-size: larger;"><?php echo $row['mother']; ?></td>
              <td style="color: ghostwhite; font-size: larger;"><?php echo $row['father']; ?></td>

             <td>
                <a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
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
    <li style="color: crimson;"><a href="delete.php">Delete Records</a> </li>
    <li style="color: crimson;"><a href="view.php">View Records</a> </li>
    <li style="color: crimson;"><a href="add.php">Add Records</a> </li>
  </ul>
</footer>
<address style="color: white">
  Author: Edudzi Mamattah
</address>
  
  </body>
</html>
