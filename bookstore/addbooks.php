<?php
// A form for adding book records.
require("dbconnect.php");

?>
<head>
<title>Add a Book</title>
<link rel='stylesheet' href='books.css'>
</head>

<form action="addbookrecord.php" method='POST'>
	<table><!--
		<tr>
			<td>Book ID:</td>
			<td><input name='book_id' type='text'></td>
		</tr> -->
		<tr>
			<td>Title:</td>
			<td><input name='title' type='text'></td>
		</tr>
		<tr>
			<td>Author:</td>
			<td><select name='author'>
				<?php
					$query = "select author_id, concat(last_name, ', ', first_name) as author_name from authors order by last_name;";
					$authors_result = mysql_query($query);
					while ($author_record = mysql_fetch_assoc($authors_result)) {
						?>
						<option value='<?php print $author_record['author_name'];?>'><?php print $author_record['author_name'];?></option>
						<?php
					}
				?>
				</select>
			</td>
		</tr>
			<td>Publisher:</td>
			<td><input name='publisher' type='text'></td>
		</tr>
		<tr>
			<td colspan='2'align='right'><input type='submit' value='Add record'></td>
		</tr>
	</table>
</form>
