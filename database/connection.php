<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DP_PASS','');
define('DB_NAME','bookstore');
 
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die ('localhost connection problem. Error: ' );
$query = "Select * From gebruikers WHERE name = Daniel";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)){
echo $row[1];
}

 ?>
