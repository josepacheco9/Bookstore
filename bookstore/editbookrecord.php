<?php
// This is run to update the book record posted by a user.

?>
<head>
<link rel='stylesheet' href='books.css'>
</head>
<?php

require("dbconnect.php");


$book_id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];

?>
<div class='record'>
<?php
print "You tried to update the following record: <br />";
print "Book ID: " . $book_id . "<br />";
print "Title: " . $title . "<br />";
print "Author: " . $author . "<br />";
print "Publisher: " . $publisher . "<br />";
?>
</div>
<?php

$query = "update books set title = '" . $title . "', author = '" . $author . "', publisher = '" . $publisher . "' where book_id = " . $book_id;

if (mysql_query($query)) {
	?>
	<p class='success'>Success! <a href="books.php">Go to the updated list now</a>.</p>
	<?php
} else {
	print "<br />Error! Query executed is: " . $query . "<br />";
	print "<a href='editbooks.php'>Go back to the form</a>";
}
