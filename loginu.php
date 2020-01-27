<?php 



if(isset($_POST['submit'])){
	session_start();

$_SESSION['name']= $_POST['name'];
$_SESSION['password']=md5($_POST['password']);

if(!empty($_SESSION['name']) && !empty($_SESSION['password'])){

$hun= mysqli_connect("localhost", "root", "", "movies") or die (" We are sorry dear one we couldn't connect!");
// mysqli_select_db($con, );

$query= mysqli_query($hun,"SELECT * FROM customer WHERE name='".$_SESSION['name']."'");


$numrows = mysqli_num_rows($query);
// echo $numrows;	

if($numrows!=0){



	while($row=mysqli_fetch_assoc($query)){

		$dbname= $row['name'];
		$dbpassword= $row['Password'];



	}


	if($_SESSION['name']==$dbname){

		if($_SESSION['password']== $dbpassword){
			// if(($_POST['remember'])=='on'){

			// 	$expire= time()+86400;
			// 	setcookie('customer', $_POST['name'], $expire);

			// }

			 echo "You are in";
			 echo $dbname;
			 header("refresh: 2; url=movpagination.php");

			// header("location: usersm.php");

		}else{

			echo "Wrong password, check again"."<br/>";
			echo $dbname;
			echo "<br/>";
			echo $dbpassword;
			echo "<br/>";
			echo $_SESSION['password'];
			header("refresh: 27; url=homeu.php");
		}
	}else{

		echo "That name does not exist in our databases";
		header("refresh: 2; url=homeu.php");
	}

}else{

	echo "User not registered";
	header("refresh: 2; url=registeru.php");

}



}else{

echo "You have to type both name and email correctly";
header("refresh: 2; url=homeu.php");

}
}else{

	echo "Access Denied";
	header("refresh: 2; url=registeru.php");
}


 ?>