<?php
// This is run to add the book record posted by a user.

?>
<head>
<link rel='stylesheet' href='itco.css'>
</head>
<?php

require("dbconnectitco.ph");

 $book_id = $_POST['book_id'];
 $title = $_POST['title'];
 $author = $_POST['author'];
 $publisher = $_POST['publisher'];

?>
<div class='record'>
<?php
print "You tried to insert the following record: <br />";
print "Book ID: " . $book_id . "<br />";
print "Title: " . $title . "<br />";
print "Author: " . $author . "<br />";
print "Publisher: " . $publisher . "<br />";
?>
</div>
<?php

$query = "insert into books (title, author, publisher) values ('" . $title . "', '" . $author . "', '" . $publisher . "')";

if (mysql_query($query)) {
	?>
	<p class='success'>Success! <a href="books.php">Go to the updated list now</a>.</p>
	<?php
} else {
	print "<br />Error! Query executed is: " . $query . "<br />";
	print "<a href='addbooks.php'>Go back to the form</a>";
}
