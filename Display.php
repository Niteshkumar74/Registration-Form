<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
<style>
    body{
    	background-image: url("background.jpg.jpg");
    	text-align: center;
    }
	table
	{
		font-family: sans-serif;
		font-size: 15px;
		background-color: white;

	}
	th
	{
		font-family: gadugi;	
		background-color: deeppink;
	}
	td
	{
		background-color: transparent;
		color: blue;
		text-align: center;
	}

</style>

</head>
<body>

</body>
</html>

<?php

include("Connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);

echo "Total Numbers of records : " . $total ."";

if ($total != 0)
{
    
 ?>

 	<h2 align="center"><mark>Displaying All Records</mark></h2>
   
   <table border="20" align="center" cellpadding="3" width="100%">
   	<tr bgcolor="red">
   		<th width="15%">First Name </th>
   		<th width="15%">Last Name</th>
   		<th width="10%">Gender</th>
   		<th width="20%">Email</th>
   		<th width="15%">Phone Numaber</th>
   		<th width="25%">Address</th>
   		
   	</tr>
   


 <?php

    while ($result = mysqli_fetch_assoc($data))
    {
        
    	echo "<tr>
    			<td>$result[fname]</td>
   		        <td>$result[lname] </td>
   		        <td>$result[gender] </td>
   		        <td>$result[email]</td>
   		        <td>$result[phone]</td>
   		        <td>$result[address]</td>


   		        
   			</tr>

   		  	";

    }
   
} 
else
{
    echo "No records found";
}
?>


</table>