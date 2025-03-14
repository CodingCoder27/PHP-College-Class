<?php
    include("Templating/header.php");
?>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <?php
        $story = $_GET['story'];
        function start_read($story) {
            $story_contents = file_get_contents('Short_stories/' . $story);
            $story_contents = explode("\n", $story_contents);

            $content = " ";
            ob_start();
            $buffer = str_repeat(" ", 4096); // fill the buffer
            $len = strlen($story_contents[1]);

            echo "<h1>" . $story_contents[0] . "</h1>";

            for($i=0; $i < $len; $i++) {
                $sleep = 0.002; // sleep half a second between output chars

                echo $buffer;

                if ($story_contents[1][$i] == ".") {
                    echo $story_contents[1][$i];

                    $sleep = 0.5; // sleep a full second after a period
                    usleep($sleep * 1000000);
                } else if ($story_contents[1][$i] == " ") {
                    echo $story_contents[1][$i];
                    echo "`";
                    usleep($sleep * 1000000);
                } else {
                    echo $story_contents[1][$i];
                    usleep($sleep * 1000000);
                }

                ob_flush();
                flush();
            }
        }

        start_read($_GET['story']);
    ?>

    <form method="GET">
        <input type="hidden" name="story" value="<?php echo $_GET['story']; ?>">
        <input type="submit" value="Start Again!" onclick="start_read($story)">
    </form>

<?php
    include("Templating/footer.php");
?>