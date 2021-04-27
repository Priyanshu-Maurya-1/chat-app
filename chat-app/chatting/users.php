<?php
	session_start();
	if(!isset($_SESSION['unique_id'])){
		header("location:login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="users.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
 <div class="wrapper"><script src="https://use.fontawesome.com/95bd894bfb.js"></script>
 	<section class="users">
 		<header>
		 <?php
		 include_once "php/config.php";
		 $sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
		 if(mysqli_num_rows($sql)>0){
			 $row=mysqli_fetch_assoc($sql);
		 }
		 ?>
 			<div class="content">
 				<img src="php/images/<?php echo $row['img'] ?>" alt="">
 				<div class="details">
 					<span><?php echo $row['fname']. " " . $row['lname'] ?></span>
 					<p><?php echo $row['status'] ?></p>
 				</div>	
 			</div>
 			<a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">LOGOUT</a>
 		</header>
 		<div class="search">
 			<span class="text">Select</span>
 			<input type="text" placeholder="Enter name" name="">
 			<button><i class="fa fa-search"></i></button>
 		</div>
 		<div class="users-list">
 		</div>
 	</section>
 </div>
 <script type="text/javascript" src="users.js"></script>
</body>
</html>