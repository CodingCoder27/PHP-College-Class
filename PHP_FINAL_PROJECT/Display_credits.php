<?php
    include("Templating/header.php");

    $thank_you_array = array();
?>
    <h1>Credits</h1>
    <p>Created by: Benjamin Tallman</p>

    <br><br><br>

    <h3>You can say thanks below!</h3>
    <form method="post">
        <input type="text" id="thanks" name="thanks" placeholder="Say thanks here!">
        <input type="submit" name="submit" value="Submit">
    </form>

    <br><br>

<?php

    if (isset($_POST['thanks'])) {
        array_push($thank_you_array, $_POST['thanks']);
        echo "Your Thank You Message has " . strlen($_POST['thanks']) . " characters!";
        echo "<br>";
        echo "If each letter in your message filled out 100 boxes, you would only fill " . (strlen($_POST['thanks']) / 100) * 100 . " boxes!";
        echo "<br>";
        
        if (count($thank_you_array) > 0) {
            echo "Thank You Messages: ";
            foreach ($thank_you_array as $thank_you) {
                echo $thank_you;
                echo "<br>";
            }
        } else
            echo "No Thank You Messages Yet!";
    }


    include("Templating/footer.php");
?>