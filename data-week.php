<?php
    $now = time();
    $week = 7*24*60*60;
    echo "za tydzień: ".date("d.m.Y h:i:sa", $now+$week);
?>