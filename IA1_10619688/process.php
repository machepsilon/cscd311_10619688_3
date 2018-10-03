<?php

  session_start();

  $mysqli = new mysqli('localhost','root','','demo') or die(mysqli_error($mysqli));

  $update = false;
  $name='';
  $stid='';
  $mother='';
  $father='';
  $id = 0;

  if(isset($_POST['save'])){
    $name = $_POST['name'];
    $stid = $_POST['stid'];
    $mother=$_POST['mother'];
    $father=$_POST['father'];


    $mysqli->query("INSERT INTO data (name,stid,mother,father) VALUES('$name','$stid','$mother','$father')") or die($mysqli->error);

    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: add.php");
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: delete.php");
  }

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update =true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

    // $row = $result->fetch_array();
    // $name = $row['name'];
    // $location = $row['location'];

    if (count($result)==1){
      $row = $result->fetch_array();
      $name = $row['name'];
      $stid = $row['stid'];
      $mother=$_POST['mother'];
      $father=$_POST['father'];

     }

  }

    if (isset($_POST['update'])){
      $id = $_POST['id'];
      $name = $_POST['name'];
      $stid = $_POST['stid'];
      $mother = $_POST['mother'];
      $father = $_POST['father'];


      $mysqli->query("UPDATE data SET name = '$name',stid='$stid', mother='$mother', father = '$father' WHERE id=$id") or die($mysqli->error);

      $_SESSION['message'] = "Record has been updated!";
      $_SESSION['msg_type'] = "warning";

      header("location: edit.php");
    }
 ?>
