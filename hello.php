<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Greetings!</title>
        <style type="text/css">.bold {
            font-weight: bolder;
        }
        </style>
    </head>
    <body>
        <?php // script 3.7 hello.php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        //This page should recieve a name value in the URL

        //Say "Hello":
        $name = $_GET['name'];
        print "<p>Hello, <span class=\"bold\">$name</span>!</p>";
        ?>
    </body>
</html>
