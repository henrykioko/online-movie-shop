<?php

$ras = mysqli_connect("localhost", "root" ,"") or die ("We were unable to connect you");

mysqli_select_db($ras,"movies");

$per_page=6;
$query = mysqli_query($ras,"SELECT * FROM movie LIMIT 6,6");

$pages_query = mysqli_query($ras," SELECT * FROM movie ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($ras,"SELECT * FROM movie LIMIT $start,$per_page");

$x=0;
echo "<table>";

foreach ($query as $q ){
	// echo "<tr><td width = '50'";

		echo $q['name'];
		$dir= "movies/".$q['name']."/images";
	// die($dir);

	if(!file_exists($dir)){
	}else{

	$open= opendir($dir);
	if ((readdir($open))!=false) {
		
	while(readdir($open)!=false){
		

		$mami= readdir($open);
		echo "<img border= '1' width='170' height='170' id='img'  src='$dir/$mami'>"."&nbsp&nbsp&nbsp&nbsp";
		echo "</td><tr/>";

}
}
// 		foreach ($filez[$x] as $files ) {
// 			$mami=$filez[$x];
	
		
// 		if($mami!="." && $mami!=".." && $mami!="Thumbs.db"){

			
// 		}
			
// }
}

}
echo "</table>";
echo "<br/>";
;
$prev= $page-1;
$next= $page+1;

if ($page>1){

echo "<a href= 'movpagination.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){

for ($x=1;$x<=$pages;$x++){

	echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	echo "&nbsp";


}



}/*else{
	echo "<strong>";
	echo "End of the list boy";
	echo "</strong>";*/


if($page<$pages){
echo "<a href= 'movpagination.php?page=$next'>Next</a>";
}

?>