<?php
    include("Templating/header.php");
?>
        <h1>Home Page</h1>
        <!--The following is the links to the other forms such as register new information and view the existing entries-->
        <video width="500" height="1000" controls>
            <source src="Spooky_PHP_Poster.mp4" type="video/mp4">
            <!--<source src="movie.ogg" type="video/ogg">-->
            Your browser does not support the video tag.
        </video>

        <form method="post">

        <br><br>
            <div>
                <h2><a href="Register_form.php">Register New Information</a></h2>
            </div>
                    <br><br>
            <div>
                <h2><a href="View_entries.php">View Existing Entries</a><h2>
            </div>

        </form>

<?php
    include("Templating/footer.php");
?>