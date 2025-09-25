<?php
    $matura = mktime(12,00,00,5,4,2026);
    $studniowka = 100*24*60*60;
    echo "Matura: ".date("d-m-Y",$matura)."<br>";
    echo "Studniówka: ".date("d-m-Y",$matura - $studniowka);
?>