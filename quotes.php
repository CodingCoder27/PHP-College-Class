<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Quotes</title>
</head>

<body>
    <?php //Script 2.4 quotes.php 
        //Single or double quotation marks do not matter
        $first_name = 'Benjamin';
        $last_name = "Tallman";

        //Single or double quotation marks will matter here
        $name1 = '$first_name $last_name';
        $name2 = "$first_name $last_name";

        //Single or double quotes will matter here again
        print "<h1>Double Quotes</h1>
        <p>name1 is $name1 <br> name 2 is $name2</p>";

        print '<h1>SingleQuotes</h1>
        <p>name1 is $name1 <br> name 2 is $name2</p>';
    ?>
</body>
</html>