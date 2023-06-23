<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Attendence</title>
	<style type="text/css">
		.srch
		{
			padding-left: 1000px;
		}
	</style>
</head>
<body>
	<!--_______________________________________________search bar__________________________________________________-->

	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control" type="text" name="search" placeholder="search Student ID..." required="">
				<button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</form>
	</div>


	<h2>List Of attendence</h2>
	<?php

	if(isset($_POST['submit']))
	{
		$q=mysqli_query($db,"SELECT * from attendence where id like '%$_POST[search]%' ");

		if(mysqli_num_rows($q)==0)
		{
			echo "Sorry! No ID found. Try searching again.";
		}
		else
		{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6; '>";
				//Table header
				echo "<th> "; echo "Index No"; echo "</th>";
				echo"<th>"; echo "Student Name"; echo "</th>";
				echo"<th>"; echo "Gender"; echo "</th>";
				echo"<th>"; echo "Subject"; echo "</th>";
				echo"<th>"; echo "Attendence (%)"; echo "</th>";
				echo"<th>"; echo "Eligible or Not"; echo "</th>";
				
			echo "</tr>";

			while($row=mysqli_fetch_assoc($q))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['gender']; echo "</td>";
				echo "<td>"; echo $row['subject']; echo "</td>";
				echo "<td>"; echo $row['attendence']; echo "</td>";
				echo "<td>"; echo $row['eligible']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
		}
			
	}
		/*if button is not pressed. */
	else
	{
			$res=mysqli_query($db,"SELECT * FROM `attendence` /* ORDER BY `attendence`.`name` ASC;*/");

		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #6db6b9e6; '>";
				//Table header
				echo "<th> "; echo "Index No"; echo "</th>";
				echo"<th>"; echo "Student Name"; echo "</th>";
				echo"<th>"; echo "Gender"; echo "</th>";
				echo"<th>"; echo "Subject"; echo "</th>";
				echo"<th>"; echo "Attendence (%)"; echo "</th>";
				echo"<th>"; echo "Eligible or Not"; echo "</th>";
	
			echo "</tr>";

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['gender']; echo "</td>";
				echo "<td>"; echo $row['subject']; echo "</td>";
				echo "<td>"; echo $row['attendence']; echo "</td>";
				echo "<td>"; echo $row['eligible']; echo "</td>";

				echo "</tr>";
			}
		echo "</table>";
	}
		
	?>
</body>
</html>