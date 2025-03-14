<?php
    include("Templating/header.php");
?>

    <div> 
        <h1>View Existing Entries</h1>
    </div>
       
       <?php

            $dbc = mysqli_connect('localhost', 'root', 'M7SQ1!', 'stories');

            // Define the query:
            $query = 'SELECT * FROM users ORDER BY date_entered DESC';

            if ($r = mysqli_query($dbc, $query)) { // Run the query.

                // Retrieve and print every record:
                while ($row = mysqli_fetch_array($r)) {
                    print "<p><h3>{$row['first_name']}</h3>
                    <p><h3>{$row['last_name']}</h3>
                    <p>{$row['addres']}<p>
                    <p>{$row['city']}<p>
                    <p>{$row['states']}<p>
                    <p>{$row['phone']}<p>
                    {$row['email']}<br>
                    <a href=\"edit_entry.php?id={$row['id']}\">Edit</a>
                    <a href=\"delete_entry.php?id={$row['id']}\">Delete</a>
                    </p><hr>\n";
                }

            } else { // Query didn't run.
                print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
            } // End of query IF.

                

            mysqli_close($dbc); // Close the connection.
        ?>

        <div>
            <a href="index.php">Return to Home</a>
        </div>
    
        <?php
            include("Templating/footer.php");
        ?>