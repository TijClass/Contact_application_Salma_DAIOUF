<?php

	include('connect_bd.php');
	$id=$_GET['id'];

	$query=mysqli_query($conn,"select * from `contacts` where id='$id'");
	$row=mysqli_fetch_assoc($query);

	if (isset($_POST["submit"])) {


		
		$firstname=$_POST['first_name'];
		$lastname=$_POST['last_name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address1=$_POST['address1'];
		$group=$_POST['grp'];
		$notes=$_POST['notes'];

		$sql = "update `contacts` set first_name='$firstname', last_name='$lastname', email='$email', phone='$phone', address1='$address1', grp='$group', notes='$notes' where id=$id";

		
		$result = mysqli_query($conn,$sql);
		
		header('location:logout.php');
	}
 

?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="">
		<label>Firstname:</label><input type="text" value="<?= $row['first_name']; ?>" name="first_name"></br>
		<label>Lastname:</label><input type="text" value="<?= $row['last_name']; ?>" name="last_name"></br>
        <label>email:</label><input type="text" value="<?= $row['email']; ?>" name="email"></br>
		<label>phone:</label><input type="text" value="<?= $row['phone']; ?>" name="phone"></br>
        <label>address1:</label><input type="text" value="<?= $row['address1']; ?>" name="address1"></br>
        <div class="bot">
            <input type="radio" name="grp" value="family" class="input" checked>
            <label for="btn" id="btn-label" class="uno">family</label>
            <input type="radio" name="grp" value="friend" class="input">
            <label for="btn" id="btn-label" class="uno">friend</label>
            <input type="radio" name="grp" value="Business" class="input">
            <label for="btn" id="btn-label" class="uno">Businness</label>
        </div></br>
		<label>notes</label><input type="text" value="<?= $row['notes']; ?>" name="notes"></br></br>
		<input type="submit" name="submit" value="update">
		<a href="logout.php">Back</a>
	</form>
</body>
</html>









