<?php
// A form for editing a book record.
require("dbconnect.php");

?>
<head>
<title>Edit a Book</title>
<link rel='stylesheet' href='books.css'>
</head>

<?php
	$query = "select * from bookst where book_id = " . $_GET['book_id'];
	$result = mysqli_query($con,$query);
	$record = mysqli_fetch_assoc($result);
	$book_id = $record['book_id'];
	$title = $record['title'];
	$author = $record['author'];
	$publisher = $record['publisher'];

?>
<form action="editbookrecord.php" method='POST'>
	<table>
		<tr>
			<td>Book ID:</td>
			<td><input name='book_id' type='text' value='<?php print $book_id;?>'></td>
		</tr>
		<tr>
			<td>Title:</td>
			<td><input name='title' type='text' value='<?php print $title;?>'></td>
		</tr>
		<tr>
			<td>Author:</td>
			<!--<td><select name='author'>-->
			<td><input></input>
				<?php
					$query = "select author_id, concat(last_name, ', ', first_name) as author_name from authors order by last_name;";
					$authors_result = mysqli_query($con,$query);
					while ($author_record = mysql_fetch_assoc($authors_result)) {
						if ($author_record['author_name'] == $author) {
							$default = 'selected';
						} else {
							$default = null;
						}
						?>
						<option value='<?php print $author_record['author_name'];?>' <?php print $default;?>><?php print $author_record['author_name'];?></option>
						<?php
					}
				?>
				</select>
			</td>
		</tr>
			<td>Publisher:</td>
			<td><input name='publisher' type='text' value='<?php print $publisher;?>'></td>
		</tr>
		<tr>
			<td colspan='2'align='right'><input type='submit' value='Edit record'></td>
		</tr>
	</table>
</form>
