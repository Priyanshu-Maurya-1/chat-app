<?php
	session_start();
	if(isset($_SESSION['unique_id'])){
		header("loation:users.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="signumpop.css">

    </head>
<body style=background:teal>
    <nav class="navbar">
        <ol>
            <li class="crumb" style="    padding-left:0px;
            width: 25px;"><img src="pics/doge.png" class="imglogo"></li>
            <li class="crumb"><h3>CHAT APP</h3></li>
            <div class="crumb " id="abc">
               
            <form>
                <a class="atag" href="#">About us</a>
                <a class="atag" href="#">Business</a>
               <a class="button" href="#popup1">Login</a>
               <a class="button" href="#popup2">Sign Up</a>
               
             </form>
        </ol>
        </div>
    </nav>
    <div>
    
<!--     <button aria-label="Dot 1" style="background: rgb(225, 225, 225); display: inline-block; padding: 5px; height: 10px; border-radius: 50px; margin: 6px; outline: none; border-style: none;"></button> -->
    <!-- <img src="3.jpg" alt="" class="imagecarousal imga">
    <img src="3.jpg" alt="" class="imagecarousal imgb" >
    <img src="3.jpg" alt="" class="imagecarousal imgc">
    <img src="5.jpg" alt="" class="imagecarousal imgd">
    <img src="3.jpg" alt="" class="imagecarousal imge">
    <img src="3.jpg" alt="" class="imagecarousal imgf">    -->
    <!-- <div class="imga" style="background-image: url('3.jpg'); "></div>
    <div class="imgb imgex1" style="background-image: url('3.jpg'); "></div>
    <div class="imgc imgex" style="background-image: url('3.jpg'); "></div>
    <div class="imgd imgex" style="background-image: url('3.jpg'); "></div>
    <div class="imge imgex1" style="background-image: url('3.jpg'); "></div>
    <div class="imgf" style="background-image: url('3.jpg'); "></div> -->
    <div class="div1"><img src="pics/9.jpg" class="img1 imga" ></div>
    <div class="div1"><img src="pics/12.jpg" class="img1 imgb" ></div>
    <div class="div1"><img src="pics/11.jpg" class="img1 imgc" ></div>
    <div class="div1"><img src="pics/sky.jpg" class="img1 imgd" ></div>
    <div class="div1"><img src="pics/9.jpg" class="img1 imge" ></div>
    <div class="div1"><img src="pics/13.jpg" class="img1 imgf" ></div>
    <div class="div1"><img src="3.jpg" class="img1 imgg" ></div>
    
   
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="wrapper">
	<section class="form login">
		<form action="#">
			<div class="error-text">Error</div>
			<div class="field input">
					<label>Email</label>
					<input type="text" name="email" placeholder="E-Mail Address">
				</div>
			<div class="field input">
					<label>Password</label>
					<input type="text" name="password" placeholder="Password">
					<i class="fa fa-eye"></i>
				</div>
			<div class="field button">
					<input type="submit" value="Continue">
				</div>
		</form>
		<div class="link">sign up Now <a href="#">Sign up</a></div>
	</section>
</div>

		</div>
	</div>
	
</div>
<div id="popup2" class="overlay" name="ayy">
	<div class="popup">
		<a class="close" href="#">&times;</a>
					<div class="wrapper">
	<section class="form signup">
		<form action="#" enctype="multipart/form-data">
			<div class="error-text">Error</div>
			<div class="name-details">
				<div class="field input">
					<label>First Name</label>
					<input type="text" name="fname" placeholder="First Name" required>
				</div>
				<div class="field input">
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name" required>
				</div>
			</div>
			<div class="field input">
					<label>Email</label>
					<input type="text" name="email" placeholder="E-Mail Address" required>
				</div>
			<div class="field input">
					<label>Password</label>
					<input type="text" name="password" placeholder="Password" required>
				</div>
			<div class="field image">
					<label>Select Image</label>
					<input type="file" name="image" Required>
				</div>
			<div class="field button">
					<input type="submit" name="" value="Continue">
				</div>
		</form>
		<div class="link">Already signed up?<a href="#">Login</a></div>
	</section>
</div>

		</div>
	</div>
</div>
<script src="signup.js"></script>
<script src="login.js"></script>
</body>
</html>