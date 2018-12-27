<?php
require('dbconnect.php');

$query = "delete from books where book_id = " . $_GET['book_id'];

if (mysql_query($query)) {
	print "<p>Congrats! Record has just been deleted. <a href='books.php'>Go back to list</a>.</p>";
} else {
	die("Record not deleted. Query is: " . $query . ". <a href='books.php'>Go back to list</a>.");
}
