<?php
if (isset($_POST['submit'])) {


$myvid=$_FILES['previeww']['name'];
$tempv=$_FILES['previeww']['tmp_name'];
$typearv=explode(".", $myvid);
$typev=strtolower("image/".$typearv[1]);




$mypic=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
$typearr=explode(".", $mypic);
$type=strtolower("image/".$typearr[1]);





$name = $_POST ['name'];

$genre = $_POST['genre'];

$typ = $_POST['type'];

$date = $_POST['date'];


if ($name && $genre && $typ && $date){

	



	$ras= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($ras, "movies");

	$username = mysqli_query ($ras, "SELECT name FROM movie WHERE name = '$name'");
	$count = mysqli_num_rows($username);

	
if ($count != 0){

	
	
	
	echo "<p>";

	die ("The name of the movie exists");


} else {


	if(($typev=="preview/mp4") || ($typev=="preview/flv") || ($typev=="preview/wmv") || ($typev=="preview/avi")){

		$directoryv= "./previewmv/$name/images/";
		mkdir($directoryv, 0777, true);

		move_uploaded_file ($tempv, "previewmv/$name/images/$mypic");
		include ('Navbar.php');
		echo "<br/><img border= '1' width='170' height='170' src='previewmv/$name/images/$mypic'><p>";

}else{

	echo "The file has to be a video";
}




	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){

		$directory= "./movies/$name/images/";
		mkdir($directory, 0777, true);

		move_uploaded_file ($temp, "movies/$name/images/$mypic");
		echo "<br/><img border= '1' width='170' height='170' src='movies/$name/images/$mypic'><p>";
		

mysqli_query ($ras, "INSERT INTO movie (name, genre, type, date) values ('$name', '$genre', '$typ', '$date')");

echo "Movie uploaded successfully";

// include "home.php";

header("Refresh:3; url=Uploadmovies.php");



mysqli_close($ras);

}else{

	echo "this file has to be a picture boy";
}
}
}
}else{
	echo "Fill in all the fields";
}

?>