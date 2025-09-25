<?php
    session_start();
    echo 'Welcome to page #2 <br>';

    echo 'Ulubiony kolor: '.$_SESSION['favcolor']."<br>\n";
    echo 'Ulubione zwierzę: '.$_SESSION['animal']."<br>\n";
    echo date('Y m d H:i:s', $_SESSION['time'])."<br>\n";

    echo $_SESSION['bzdura'];
?>