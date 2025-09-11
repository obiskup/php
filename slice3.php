<?php
    $a=array("red","green","blue","yellow","brown");
    print_r($a); echo "<br>";
    print_r(array_slice($a,-2,1)); echo "<br>"; // zaczyna slice od drugiego od końca elementu (-2), i zwraca tylko jeden element
    print_r($a);
?>