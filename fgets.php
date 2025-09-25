<?php
    $myfile = fopen("text.txt", "r") or die ("Unable to open file!");

    echo fgets($myfile);
    echo "<br>";
    echo fgets($myfile);

    fclose($myfile);
?>