<doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create new Directory</title>
    </head>

    <body>
        <h1>Create new Directory</h1>

        <?php
            $dir = "..\users";

            //check to see if post is used

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //ensure dir name is created by user
                if (!empty($_POST['name'])) {
                    $name = $_POST['name'];
                    $path = $dir . '/' . $name;
                    
                    //if the path already exsists no need to do it again
                    if (file_exists($path)) {
                        print "<p>Directory already exists</p>";
                    } else {
                        //path and name specified in the $path variable
                        mkdir($path);
                        print "<p>Directory created successfully</p>";
                    }
                } else {
                    print "<p>Directory name is required</p>";
                }
            }
        ?>

        <form action="create_sub_dir.php" method="post">
            <label for="name">Directory Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter Directory Name">
            <input type="submit" value="Create">
        </form>
    <body>
</html>