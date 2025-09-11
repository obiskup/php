<?php
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars); // BMW, Toyota, Volvo
    echo "$cars[0], $cars[1], $cars[2], <br>";
    rsort($cars); // Volvo, Toyota, BMW
    echo "$cars[0], $cars[1], $cars[2]";
?>