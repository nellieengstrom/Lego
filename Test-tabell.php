<!doctype html> hej
<html>
<head>
<meta charset="utf-8">
 </head>
<body>

<table> 
<tr>
<th> ItemID </th> <!-- <th>Picture</th> <th>Color</th> <th>Part name</th> -->
</tr>

<?php $connection = mysqli_connect("mysql.itn.liu.se","lego","","lego"); 
	if (!$connection) 
	{
		die('MySQL connection error');
	} 
	
	$contents = mysqli_query($connection,"SELECT COUNT(DISTINCT ItemID, ColorID) AS NumberOfLego FROM inventory ");
	
	for ($x = 1; $x <= $contents->num_rows; $x++) 
{
	 $row = mysqli_fetch_array($contents);
	
	
	echo "<tr>", 
		 "<td>", $row [NumberOfLego], "</td>", 
		 "</tr>";
}

mysqli_close($connection); 

?>

</table>

</body>
</html>
