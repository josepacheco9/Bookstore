<?php
// This script tries to display records of 'books' table.

?>
<head>
<title>Books</title>
<link rel="stylesheet" href="books.css">
</head>
<?php


// fire up db connnection
require('dbconnect.php');

$query = "select * from bookst;";
mysqli_query($con,$query);

if (mysqli_query($con,$query)) {
	echo "Query is just executed.";
} else {
	die("Sorry. There's a problem with your query statement.");
}

$result = mysqli_query($con,$query);

$record_count = mysqli_num_rows($result);

echo "There are " . $record_count . " book records in the database.";

?>
<br />
<a href="addbooks.php">Add a Book?</a>
<br />
<br />
<table>
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Author</th>
			<th>Publisher</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
<?php
while ($record = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php print $record['book_id'];?></td>
			<td><?php print $record['title'];?></td>
			<td><?php print $record['author'];?></td>
			<td><?php print $record['publisher'];?></td>
			<td><a href='editbooks.php?book_id=<?php echo $record['book_id'];?>'>Edit</a></td>
			<td><a href='deletebookrecord.php?book_id=<?php echo $record['book_id'];?>'>Delete</a></td>
		</tr>
		<?php
}
?>
</table>
