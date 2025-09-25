<?php
    $czas = mktime(11,14,54,8,12,2014); // hours minutes seconds month day year
    echo "Created date is ".date("d.m.Y h:i:sa", $czas);
?>