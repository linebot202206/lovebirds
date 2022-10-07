<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = '1hrH8YXymU';
$dbpass = 'rw1w0XLQih';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
 
if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($conn, '1hrH8YXymU');
//mysqli_close($conn);
?>
