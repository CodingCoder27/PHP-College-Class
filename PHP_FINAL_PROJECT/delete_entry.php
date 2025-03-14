<?php
	include("Templating/header.php");
?>
		<h1>Delete an Entry</h1>
		<?php // Script 12.7 - delete_entry.php

			// Connect and select:
			$dbc = mysqli_connect('localhost', 'root', 'M7SQ1!', 'stories');

			if (isset($_GET['id']) && is_numeric($_GET['id']) ) {

				// Define the query:
				$query = "SELECT first_name, last_name, addres, city, states, phone, email FROM users WHERE id={$_GET['id']}";
				if ($r = mysqli_query($dbc, $query)) {

					$row = mysqli_fetch_array($r);

					// Make the form:
					print '<form action="delete_entry.php" method="post">
					<p>Are you sure you want to delete this entry?</p>
					<p><h3>' . $row['first_name'] . '</h3>' .
					'<h3>' . $row['last_name'] . '</h3>' .
					'<h3>' . $row['addres'] . '</h3>' .
					'<h3>' . $row['city'] . '</h3>' .
					'<h3>' . $row['states'] . '</h3>' .
					'<h3>' . $row['phone'] . '</h3>' .
					'<h3>' . $row['email'] . '</h3>' .
					'<input type="hidden" name="id" value="' . $_GET['id'] . '">
					<input type="submit" name="submit" value="Delete this Entry!"></p>
					</form>';

				} else {
					print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}

			} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {

				// Define the query:
				$query = "DELETE FROM users WHERE id={$_POST['id']} LIMIT 1";
				$r = mysqli_query($dbc, $query);

				// Report on the result:
				if (mysqli_affected_rows($dbc) == 1) {
					print '<p>User Deleted.</p>';
				} else {
					print '<p style="color: red;">Could not delete the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}

			} else {
				print '<p style="color: red;">This page has been accessed in error.</p>';
			}

			mysqli_close($dbc);

		?>

		<div>
            <a href="index.php">Return to Home</a>
        </div>

		<div>
            <a href="View_entries.php">Return to Entries</a>
        </div>

<?php
	include("Templating/footer.php");
?>