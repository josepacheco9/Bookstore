<?php
//$host = 'localhost';
//$user = 'books_admin';
//$password = 'nimda123';
//$database = 'bookstore';

define('HOST','localhost');
define('USER','root');
define('PASSWORD','Bang2tu');
define('DATABASE', 'bookstore');
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//mysqli_select_db(CON,DATABASE);
//mysqli_connect(HOST,USER,PASSWORD,DATABASE);



//if (mysql_select_db(DATABASE)) {
//	echo "Success! You are now connected to the database.";
//} else {
//	die("Cannot connect to the database!");
//}
?>
