<?php
    echo strlen("Hello World!"); //12
    echo "<br>";
    echo strlen("Łódź"); //7
    echo "<br>";
    echo mb_strlen("Łódź"); //4
?>