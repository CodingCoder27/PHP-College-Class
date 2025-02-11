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
        $soups = array ('Monday' => 'Clam Chowder','Tuesday' => 'White Chicken Chili', 'Wednesday' => 'Vegetarian', 'Thursday' => 'Chicken Noodle');


        //count and print the # of elements
        $count1 = count($soups);
        print "<p>The soups array originally had $count1 elements.</p>";

        //took out last 3 items to put these here
        $soups['Friday'] = 'Broccoli';
        $soups['Saturday'] = 'Tomato';
        $soups['Sunday'] = 'Onion';

        //Count the elements again
        $count2 = count($soups);
        print "<p>After adding 3 more soups, the array now has $count2 elements. </p>";

        // Print the contents of the array:
        print_r ($soups);

        ?>
    </body>
</html>