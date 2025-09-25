<?php
    $data = mktime(12,00,00,10,20,2006);
    echo date("d-m-Y",$data)."<br>";
    $dni = time() - $data;
    $dniCzytelne = $dni / (24*60*60);
    echo "Ilość dni: ".$dniCzytelne;
?>