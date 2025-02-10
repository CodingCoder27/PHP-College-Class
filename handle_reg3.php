<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <style type="text/css" media="screen"> .error {color:red;} </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        <?php //script 6.2

        //error management
        error_reporting(0);

        $okay = true;

        //validate email
        if (empty($_POST['email'])) {
            print '<p class="error">Please enter your email address.</p>';
            $okay=false;
        }

        //validate the password:
        if (empty($_POST['password'])) {
            print '<p class="error"> Please enter your password.</p>';
            $okay = false;
        }

        if ($okay) {
            print '<p> You have been successfully registered (but not really).</p> <br>';
        }
        ?>
    </body>
</html>
