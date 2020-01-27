<html>

<head>
<title> Series Upload</title>

</head>
<h1>Upload Series</h1>
<body>

<form ENCTYPE="multipart/form-data" method = "post" action = "seriesinsert.php" />
<table  border = "0" width = "60%">

<tr><td  width = 10%> Name: </td><td> <input type ="text" name = "name" maxlength = "30"/></td></tr><br/>
<tr><td width = 10% > Genre: </td><td> <input type ="text" name = "genre" maxlength = "20"/> </td></tr><br/>
<tr><td width = 10% > Season: </td><td> <input type ="text" name = "season" maxlength = "20"/> </td></tr><br/>
<tr>
<td width = 10%> Episodes:</td>
<td> 
<input type ="text" name ="episodes" maxlength = ""/>
</td>
</tr>
<tr>
<td width = "10%">D.O.R:</td>
<td><input type = "text" name = "date" maxlength = "10"/>
<tr><td  width = 10%> preview: </td><td> <input type ="file" name = "previeww"/></td></tr><br/>
</td>
</tr>

<!-- <input type="hidden" name="MAX_FILE_SIZE" size="100000"/> -->

</br>
</table>

<p><strong id="ter">Upload series logo/picture</strong><p>
<p>
<input type="file" name="upload">
</p>

<p>


<input type = "submit" name = "submit" value = "Upload" />

<p>

<!-- <?php# include ("links.php"); ?> -->
 

</form>
</body>
</html> 