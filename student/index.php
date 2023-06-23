<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Student Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->
<style type="text/css">
	nav
	{
	    float: right;
	    word-spacing: 30px;
	    padding: 20px;
	}
	nav li
	{
	    display: inline-block;
	    line-height: 100px;
	} 
</style>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="images/4.jpg"><br><br>
				<h1 style="color: yellow">STUDENT MANAGEMENT SYSTEM</h1>
			</div>

			<nav>  
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="student_login.php">STUDENT_LOGIN</a></li>
					<li><a href="result.php">RESULT</a></li>
					<li><a href="attendence.php">ATTENDENCE</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>	
		<section>
		<div class="sec_img">
<!--
		<div class="w3-content w3-section" style="width: 100%; height: 400px;">
			<img class="mySlides w3-animate-fading" src="images/A1.jpg" style="width: 100%">
			<img class="mySlides w3-animate-left" src="images/A2.jpg" style="width: 100%">
			<img class="mySlides w3-animate-fading" src="images/A3.jpg" style="width: 100%">
			<img class="mySlides w3-animate-fading" src="images/A4.jpg" style="width: 100%">
			<img class="mySlides w3-animate-left" src="images/A5.jpg" style="width: 100%">
	    </div>
<script type="text/javascript">
	var a=0;
	carousel();

	function carousel()
	{
		var i;
		var x=document.getElementsByClassName("mySlides");

		for ( i = 0; i < x.length; i++) 
		{
			x[i].style.display="none";
		}

		a++; 
		if(a > x.length) {a = 1}
			x[a-1].style.display = "block";
			setTimeout(carousel, 5000);
	}
</script>
-->
			<br><br><br>

			<div class="box">
				<br><br><br><br>
		       		<h1 style="text-align: center; font-size: 35px;">Welcome to the Student Management System </h1><br><br>
				<h1 style="text-align: center;font-size: 25px;">Faculty of Science </h1><br>
				<h1 style="text-align: center; font-size: 25px;">Department of Computer Science </h1><br>
				<h1 style="text-align: center; font-size: 20px;">Acadamic year(2017/18) </h1><br>  
			</div>


		</div>	
		</section>
		

	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>  