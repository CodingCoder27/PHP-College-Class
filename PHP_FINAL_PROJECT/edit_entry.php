
<?php
	include("Templating/header.php");
?>
		<h1>Edit an Entry</h1>
		<?php // Script 12.8 - edit_entry.php

		// Connect and select:
		$dbc = mysqli_connect('localhost', 'root', 'M7SQ1!', 'stories');

		//Set the character set:
		mysqli_set_charset($dbc, 'utf8');

		if (isset($_GET['id']) && is_numeric($_GET['id']) ) {

			// Define the query.
			$query = "SELECT first_name, last_name, addres, city, states, phone, email FROM users WHERE id={$_GET['id']}";
			if ($r = mysqli_query($dbc, $query)) {

				$row = mysqli_fetch_array($r); // Retrieve the information.

				// Make the form:
				print '<form action="edit_entry.php" method="post">
			<p>First Name: <input type="text" name="first_name" size="40" maxsize="100" value="' . htmlentities($row['first_name']) . '"></p>
			<p>Last Name: <input type="text" name="last_name" size="40" maxsize="100" value="' . htmlentities($row['last_name']) . '"></p>
			<p>Address: <input type="text" name="addres" size="40" maxsize="100" value="' . htmlentities($row['addres']) . '"></p>
			<p>City: <input type="text" name="city" size="40" maxsize="100" value="' . htmlentities($row['city']) . '"></p>
			<p>State: <input type="text" name="states" size="40" maxsize="100" value="' . htmlentities($row['states']) . '"></p>
			<p>Phone: <input type="text" name="phone" size="40" maxsize="100" value="' . htmlentities($row['phone']) . '"></p>
			<p>Email: <input type="text" name="email" size="40" maxsize="100" value="' . htmlentities($row['email']) . '"></p>
			<input type="hidden" name="id" value="' . $_GET['id'] . '">
			<input type="submit" name="submit" value="Update this Entry!">
			</form>';

			} else {
				print '<p style="color: red;">Could not retrieve the blog entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
			}

		} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {

			// Validate and secure the form data:
			$problem = FALSE;
			if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['addres']) && !empty($_POST['city']) && !empty($_POST['states']) && !empty($_POST['phone']) && !empty($_POST['email'])) {
				$first_name = trim(strip_tags($_POST['first_name']));
				$last_name = trim(strip_tags($_POST['last_name']));
				$address = trim(strip_tags($_POST['addres']));
				$city = trim(strip_tags($_POST['city']));
				$states = trim(strip_tags($_POST['states']));
				$Phone_Number = trim(strip_tags($_POST['phone']));
				$email = trim(strip_tags($_POST['email']));
			} else {
				print '<p style="color: red;">Please submit both a title and an entry.</p>';
				$problem = TRUE;
			}

			if (!$problem) {

				// Define the query.
				$query = "UPDATE users SET first_name='$first_name', last_name='$last_name', addres='$address', city='$city', states='$states', phone='$Phone_Number',email='$email' WHERE id={$_POST['id']}";
				$r = mysqli_query($dbc, $query);

				// Report on the result:
				if (mysqli_affected_rows($dbc) == 1) {
					print '<p>User has been updated.</p>';
				} else {
					print '<p style="color: red;">Could not update the entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}

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