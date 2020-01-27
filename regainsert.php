<?php
if (isset($_POST['submit'])) {
$name = $_POST ['name'];

$password = $_POST['password'];

$cpassword = $_POST['confirmpassword'];


if ($name &&  $password && $cpassword){

	if (strlen($password) > 4){


	if ($password === $cpassword){



	$hun= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($hun, "movies");

	$username = mysqli_query ($hun, "SELECT name FROM admins WHERE name = '$name'");
	$count = mysqli_num_rows($username);	


if ($count != 0){

	
	
	
	echo "<p>";

	die ("That name already exists baby");

} else {

$passwordmd5=md5($password);
mysqli_query ($hun, "INSERT INTO admins (name,Password) values ('$name','$passwordmd5')");

$registered = mysqli_affected_rows($hun);

echo "You have been registered successfully";

header("Refresh:2; url=homea.php");



mysqli_close($hun);

}
}else{

	echo "passwords have to match";
	header("refresh: 4; url= registera.php ");
}

}else {

die ("password too short. Type again");

	header("refresh: 4; url= registera.php ");
}
}
else {

	echo "You have to key in all fields";
	header("refresh: 4; url= registera.php ");

}
}
?>

<!-- http://192.168.1.1/home.htm?t=1539947833724 -->