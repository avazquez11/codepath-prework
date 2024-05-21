<?php

$hn='localhost'; //$hn is host name
$db='test'; //database name
$un='root'; //username
$pw='root';

$conn = new mysqli($hn, $un, $pw, $db);

if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM montoya";
//echo $query.'<br>';

//run query and catch error of the query if any and assign it to $result
$result = $conn->query($query);
if(!$result) die($conn->error);

//grab number of rows
$rows = $result->num_rows; 

for($j=0; $j<$rows; ++$j){
	
	$result->data_seek($j); 
	$row = $result->fetch_array(MYSQLI_NUM);
	
	echo "My name is Inigo $row[1] <br><br>";
	
	if($row[1]!="") echo "YAHOO! TESTING IS SUCCESSFUL";
	
}
	


?>