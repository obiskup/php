<?php
    $favcolor = "green";
    switch ($favcolor) {
        case "red":
            echo '<p style="color: red;">Your favorite color is red!</p>';
            break;
        case "blue":
            echo '<p style="color: blue;">Your favorite color is blue!</p>';
            break;
        case "green":
            echo '<p style="color: green;">Your favorite color is green!</p>';
            break;
        case "yellow":
            echo '<p style="color: yellow;">Your favorite color is yellow!</p>';
            break;
        default:
            echo "<p>Your favorite color is neither red, blue, green or yellow!</p>";
    }
?>