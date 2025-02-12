<!DOCTYPE html PUBLIC "-//W3C//DTDXHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>No Soup for You!</title>
    </head>
    <body>
        <h1>Mmm...soups</h1>
        <?php // Script 7.1 - soups1.php

        // Address error management, if you want.

        // Create the array:
        $soups = array ('Monday' => 'Clam Chowder','Tuesday' => 'White Chicken Chili', 'Wednesday' => 'Vegetarian', 'Thursday' => 'Chicken Noodle', 'Friday' => 'brocolli', 'Saturday' => 'tomato', 'Sunday' => 'onion');

        //Print each key and value
        foreach ($soups as $day => $soup) {
            print "<p>$day: $soup</p>\n";
        }

        ?>
    </body>
</html>