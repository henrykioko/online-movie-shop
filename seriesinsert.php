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

$season = $_POST['season'];

$episode = $_POST['episodes'];

$date = $_POST['date'];


if ($name && $genre && $season && $episode && $date){

	



	$ras= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($ras, "movies");

	$username = mysqli_query ($ras, "SELECT name FROM series WHERE name = '$name'");
	$count = mysqli_num_rows($username);

	
if ($count != 0){

	
	
	
	echo "<p>";

	die ("The name of the movie exists");

	echo "$name";


} else {


	if(($typev=="preview/mp4") || ($typev=="preview/flv") || ($typev=="preview/wmv") || ($typev=="preview/avi")){

		$directoryv= "./previewsr/$name/images/";
		mkdir($directoryv, 0777, true);

		move_uploaded_file ($tempv, "previewsr/$name/images/$mypic");
		include ('Navbar.php');
		echo "<br/><img border= '1' width='170' height='170' src='previewsr/$name/images/$mypic'><p>";

}else{

	echo "The file has to be a video";
}




	if(($type=="image/jpeg") || ($type=="image/jpg") || ($type=="image/bmp")){

		$directory= "./series/$name/images/";
		mkdir($directory, 0777, true);

		move_uploaded_file ($temp, "series/$name/images/$mypic");
		echo "<br/><img border= '1' width='170' height='170' src='series/$name/images/$mypic'><p>";
		

mysqli_query ($ras, "INSERT INTO series (name, genre, season, episode, date) values ('$name', '$genre', '$season', '$episode', '$date')");

echo "Series uploaded successfully";
// include "home.php";

// header("Refresh:30; url=Uploadmovies.php");



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