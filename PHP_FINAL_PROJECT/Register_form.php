<?php
    include("Templating/header.php");
?>
        <!--The following is the code for the main form to fill out!-->
        <div>
            <h1>Register New Information</h1>
        </div>

        <form method="post">
            <div>
                <label type="text" for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter First Name" size="20" required>
            </div>

            <div>
                <label type="text" for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name" size="20" required>
            </div>

            <div>
                <label type="text" for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter Address" size="30" required>
            </div>

            <div>
                <label type="text" for="city">City:</label>
                <input type="text" id="city" name="city" placeholder="Enter City" size="20" required>

                <label type="text" for="states">State:</label>
                <input type="text" id="states" name="states" placeholder="Enter State" size="20" required>

                <label type="text" for="Phone_Number">Zip:</label>
                <input type="text" id="Phone_Number" name="Phone_Number" placeholder="Enter Phone Number" size="30" required>

            </div>

            <div>
                <label type="text" for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example_email@placeholder.com" size="30" required>
            </div>

            <input type="submit" name="submit" value="Register">

        </form>

        <?php
            
            $dbc = mysqli_connect('localhost', 'root', 'M7SQ1!', 'stories');

            $sql = "SHOW TABLES LIKE 'users'";

            $result = $dbc->query($sql);
            
            if ($result->num_rows <= 0) {
            
                
                if ($dbc = @mysqli_connect('localhost', 'root', 'M7SQ1!', 'stories')) {
                    // Define the query:
                    $query = 'CREATE TABLE users (id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, first_name VARCHAR(100) NOT NULL,
                    last_name TEXT NOT NULL, addres TEXT NOT NULL, city TEXT NOT NULL, states TEXT NOT NULL, phone TEXT NOT NULL, email TEXT NOT NULL, date_entered DATETIME NOT NULL) CHARACTER SET utf8';

                    // Execute the query:
                    if (@mysqli_query($dbc, $query)) {
                        print '<p>The table has been created!</p>';
                    } else {
                        print '<p style="color: red;">Could not create the table because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
                    }

                    mysqli_close($dbc); // Close the connection.

                } else { // Connection failure.
                    print '<p style="color: red;">Could not connect to the database:<br>' . mysqli_connect_error() . '.</p>';
                }//*/
            
            }


            if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Handle the form.

                // Validate the form data:
                $problem = FALSE;
                if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['states']) && !empty($_POST['Phone_Number']) && !empty($_POST['email'])) {
                    $first_name = trim(strip_tags($_POST['first_name']));
                    $last_name = trim(strip_tags($_POST['last_name']));
                    $address = trim(strip_tags($_POST['address']));
                    $city = trim(strip_tags($_POST['city']));
                    $states = trim(strip_tags($_POST['states']));
                    $Phone_Number = trim(strip_tags($_POST['Phone_Number']));
                    $email = trim(strip_tags($_POST['email']));
                } else {
                    print '<p style="color: red;">Please submit both a title and an entry.</p>';
                    $problem = TRUE;
                }
            
                if (!$problem) {
            
                    // Connect and select:
                    //$dbc = mysqli_connect('localhost', 'root', 'M7SQ1!', 'test');
            
                    // Define the query:
                    $query = "INSERT INTO users (id, first_name, last_name, addres, city, states, phone, email, date_entered) VALUES (0, '$first_name', '$last_name', '$address', '$city', '$states', '$Phone_Number','$email', NOW())";
            
                    // Execute the query:
                    if (@mysqli_query($dbc, $query)) {
                        print '<p>The new user has been added!</p>';
                    } else {
                        print '<p style="color: red;">Could not add the entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
                    }
            
            
                } // No problem!

                

                mysqli_close($dbc); // Close the connection.
            
            }
        ?>

        <div>
            <a href="index.php">Return to Home</a>
        </div>

<?php
    include("Templating/footer.php");
?>