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

        // adjust for html
        $html_post = htmlentities($_POST['posting']);
        $strip_post = strip_tags($_POST['posting']);

        // Print a message:
        print "<div>Thank you, $name, for your posting:
        <p>Original: $posting</p>
        <p>Entity: $html_post</p>
        <p>Stripped: $strip_post</p>";

        ?>
    </body>
</html>