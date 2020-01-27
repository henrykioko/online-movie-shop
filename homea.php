<?php

if(isset($_COOKIE['movies'])){

	header('location:usersm.php');
}else{




echo'
<html>

<head>
<head/>


<body>

<h1><center>Admin Panel World Fete Movies</center></h1>

<center><strong> Please Login... </strong></center>


<center>

<form bgcolor= "#00000" method = "POST" action = "logina.php" />
<table  border = "0" width = "60%">

<tr>
<td width="10%"> Name: </td>
<td > <input type ="text" name = "name" maxlength = "30"/></td>
</tr>

<td width="10%"> Password:</td>
<td > 
<input type ="password" name ="password" maxlength = "10"/>
</td></tr><tr>
<td width="30%">Remember me?</td><td><input id = "rem" type="checkbox" name="remember"/></td>
</tr>
<tr><br/>
<td colspan="2" style="text-align: center;">

<button type="submit" name="submit">Login</button>&nbsp
</td>
</tr>
</table>
</form>

</center>
<a id="www" href="registeru.php">Dont have account</a>

</body>
</head>
';
}
?>