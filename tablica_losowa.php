<?php
    $tablica = array(1,5,21,43,156,33);
    $szukane = 156;
    
    $liczbaElementow = count($tablica);
    $i = 0;

    echo "Tablica:"; print_r($tablica); echo "<br>";
    echo "Szukane jest $szukane: <br>\n";

    while($i < $liczbaElementow){
        if($tablica[$i] == $szukane){
            echo "Znaleziono $szukane na pozycji $i";
            return;
        } else {
            echo "$tablica[$i] != $szukane<br>\n";
            $i++;
        }
    }
?>