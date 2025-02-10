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
        //error_reporting(0);

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

        //ensure both passwords match
        if ($_POST['password'] != $_POST['confirm']) {
            print '<p class="error">Your confirmed password does not match the original password.</p>';
            $okay = false;
        }

        //validate birth year
        if (is_numeric($_POST['year']) AND (strlen($_POST['year'])==4)) {
            //check that they were born before this year:

            if ($_POST['year'] <= 2025) {
                //calc this years age
                $age = 2025 - $_POST['year'];
            } else {
                print '<p class="error"> Either you entered your birth year wrong or you come from the future! </p>';
                $okay = false;
            }
        } else {
            print '<p class="error"> Please enter the year you were born as four digits.</p>';
            $okay = false;
        }

        //validate the terms:
        if (!isset($_POST['terms'])) {
            print '<p class="error"> You must accept the terms.</p>';
            $okay = false;
        }

        //validate the color:
        if ($_POST['color'] == 'red') {
            $color_type = 'primary';
        } elseif ($_POST['color'] =='yellow') {
            $color_type = 'primary';
        } elseif ($_POST['color'] == 'green') {
            $color_type = 'secondary';
        } elseif ($_POST['color'] == 'blue') {
            $color_type ='primary';
        } elseif ($_POST['color'] == 'purple') {
            $color_type = 'secondary';
        } else {
            //problem
            print '<p class="error"> Please select your favorite color.</p>';
            $okay = false;
        }

        if ($okay) {
            print '<p> You have been successfully registered (but not really).</p> <br>';
            print "<p>You will turn $age this year.</p>";
            print "<p>Your favorite color is a $color_type color.</p>";
        }
        ?>
    </body>
</html>
