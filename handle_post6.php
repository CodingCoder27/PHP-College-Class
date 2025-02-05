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
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $posting = trim($_POST['posting'], false);

        // Get a word Count:
        $words = str_word_count($posting);

        //Take out the bad words:
        $posting = str_ireplace('badword', 'XXXX', $posting);

        //Create a full name variable
        $name = $first_name . ' ' . $last_name;

        //Get a snippet of the posting
        $posting = substr($posting, 0, 50);

        //print a message:
        print "<div> Thank you, $name, for your posting: <p>$posting...</p><p>($words words) </p></div>";

        // adjust for html
        $html_post = htmlentities($_POST['posting']);
        $strip_post = strip_tags($_POST['posting']);

        // Print a message:
        print "<div>Thank you, $name, for your posting:
        <p>Original: $posting</p>
        <p>Entity: $html_post</p>
        <p>Stripped: $strip_post</p>";

        //Make a link to another page
        $name = urlencode($name);
        $email = urlencode($_POST['email']);
        print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";
        

        ?>
    </body>
</html>