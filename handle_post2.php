<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <META http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Forum Posting</title>
    </head>
    <body>
        <?php
        // Script 5.2 - handle_post.php

        // Get the values from the $_POST array:
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $posting = nl2br($_POST['posting'], false);

        // Create a full name variable:
        $name = $first_name . ' ' . $last_name;

        // Get a word count:
        $words = str_word_count($posting);

        // Take out bad words:
        $posting = str_ireplace('badword', 'XXXXX', $posting);

        // Print a message:
        print "<div>Thank you, $name, for your posting:
        <p>$posting</p>";

        ?>
    </body>
</html>