<?php
if (isset($_POST['submit'])) {
$name = $_POST ['name'];

$email = $_POST['Email'];

$password = $_POST['password'];

$cpassword = $_POST['confirmpassword'];

$contacts = $_POST['Contacts'];


if ($name && $email && $password && $cpassword){

	if(filter_var($email,FILTER_VALIDATE_EMAIL)){

	if (strlen($password) > 4){


	if ($password === $cpassword){



	$hun= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($hun, "movies");

	$username = mysqli_query ($hun, "SELECT name FROM customer WHERE name = '$name'");
	$count = mysqli_num_rows($username);

	$remail = mysqli_query ($hun, "SELECT Email FROM customer WHERE Email = '$email'");
	$checkemail = mysqli_num_rows ($remail);


if ($checkemail !=0){

	echo "<center>";

	// include ('links.php');

	die ("That email already exists");
	echo "</center>";


}else{	
	


if ($count != 0){

	
	
	
	echo "<p>";

	die ("That name already exists baby");
	header("refresh: 4; url= registeru.php ");


} else {

$passwordmd5=md5($password);
mysqli_query ($hun, "INSERT INTO customer (name, Email, Password, contacts) values ('$name', '$email', '$passwordmd5', '$contacts')");

$registered = mysqli_affected_rows($hun);

echo "You have been registered successfully";

header("Refresh:2; url=homeu.php");



mysqli_close($hun);

}
}
}else{

	echo "passwords have to match";
	header("refresh: 4; url= registeru.php ");
}

}else {

die ("password too short. Type again");

	echo "passwords have to match";
	header("refresh: 4; url= registeru.php ");
}
}else{

echo "please type a valid email meen";

header("refresh: 4; url= registeru.php ");
}
}else{

	echo "please type a valid email meen";
	header("refresh: 4; url= registeru.php ");
}


}
else {

	echo " Error in page";
	header("refresh: 4; url= registeru.php ");

}


?>

<!-- http://192.168.1.1/home.htm?t=1539947833724 -->