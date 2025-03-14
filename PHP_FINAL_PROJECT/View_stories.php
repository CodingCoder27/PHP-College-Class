<?php
    include('Templating/header.php');
?>
    
    <h2>Stories</h2>
    <p>Here are the stories that have been submitted:</p>
    <table>
        <tr>
            <th>Story Title</th>
            <th>Story</th>
        </tr>
        <?php
            $story_folder = 'Short_stories';

            $stories = scandir($story_folder);

            foreach ($stories as $story) {
                if (($story != '.' && $story != '..')) {
                    $story_content = file_get_contents($story_folder . '/' . $story);
                    $story_info = explode("\n", $story_content);
                    echo '<tr>';
                    echo '<td>' . $story_info[0] . '</td>';
                    echo '<td>' . '<p><a href="Read_story.php?story=' . $story . '">' . 'Read Story</a></p>' . '</td>';
                    echo '<tr>';
                }
            }
            /*
            foreach ($stories as $story) {
                if ($story != '.' && $story != '..') {
                    $story_content = file_get_contents($story_folder . '/' . $story);
                    $story_info = explode("\n", $story_content);
                    echo '<tr>';
                    echo '<td>' . $story_info[0] . '</td>';
                    echo '<td>' . $story_info[1] . '</td>';
                    echo '<td>' . $story_info[2] . '</td>';
                    echo '<td>' . $story_info[3] . '</td>';
                    echo '</tr>';
                }
            }
            /* foreach ($stories as $story) : ?>
            <tr>
                <td><?php echo $story['story_title']; ?></td>
                <td><?php echo $story['story']; ?></td>
                <td><?php echo $story['story_type']; ?></td>
                <td><?php echo $story['story_rating']; ?></td>
            </tr> */?>
        <?php //endforeach; ?>
    </table>
    
    <p><a href="index.php">Return to Home</a></p>


<?php
    include('Templating/footer.php');
?>