<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Selection Panel</title>
	 <link rel="stylesheet" type="text/css" href="css/tether.min.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	 

	 <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	 <!-- <script type="text/javascript" src="js/tether.js"></script>
	 <script type="text/javascript" src="js/bootstrap.js"></script> -->
	 <script type="text/javascript" src="js/tether.min.js"></script>
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>



	
	
	<style >
		body{
				margin: 0px;
				border: 0px;
				background-image: url('imgs/bluecube.jpg');
			}
			#header{
				width: 100%;
				height:120px;
				background: black;
				color: white;
			}
			#sidebar{
				width: 300px;
				height: 400px;
				background: #27ae60;
				float: left;
			}
			#Data{
				 height: 700px;
				 background: #e0392b;
				 color:white;
				 font-family:Helvicta;
				 font-size: 25px;
				}
			ul li{
				padding: 20px;
				border-bottom: 2px solid grey;
			}
			ul li:hover{
				background: #e0392b;
				color:white;
				cursor: pointer;
}
	</style> 
</head>
<body>
<?php include 'header.php';?>

<div style="width:50px; height: 50px;"></div>
<div class=".col-lg-3" >
	<ul class="navbar navbar-default nav" style="height:650px;">
	<li><a href="add.php" style="color: ghostwhite; font-size: xx-large;">Add Student</a></li>
	<li><a href="edit.php" style="color: ghostwhite; font-size: xx-large;"> Edit Record</a></li>
	<li><a href="delete.php" style="color: ghostwhite; font-size: xx-large;"> Delete Record</a></li>
	<li><a href="view.php" style="color: ghostwhite; font-size: xx-large;"> View Records</a></li>	
	</ul>
</div>

<address style="color: white">
  Author: Edudzi Mamattah
</address>
</body>
</html>



