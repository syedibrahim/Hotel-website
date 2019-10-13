<?php include 'database.php'; ?>

<?php

// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$room=$_POST['room'];
$duration=$_POST['duration'];
$email=$_POST['email'];

//Execute the query


mysqli_query($connect,"INSERT INTO employees1 (first_name,last_name,room,duration,email)
		        VALUES ('$first_name','$last_name','$room','$duration','$email')");
				
	if(mysqli_affected_rows($connect) > 0){
		echo"<h1> Thank You!!!</h1>";
		echo "$last_name";
	echo "<p>Your room is booked</p>";
        echo"<br><br>You are being redirected to home page.....";
	echo '<a href="index.html">Click here</a>';
} else {
	echo "your room is not booked<br />";
	echo mysqli_error ($connect);
}