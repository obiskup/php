<?php
    $filename = 'text.txt';

    if(file_exists($filename)) {
        echo "The file $filename exists";
    } else {
        echo "The file $filename doesn't exist";
    }
?>