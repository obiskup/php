<?php
    $age1 = array("Peter" => "35", "Ben"=> "37", "Joe" => "43");
    
    $age2 = ["Peter" => "35", "Ben"=> "37", "Joe" => "43"];
    
    $age3 = [];
    $age3['Peter'] = "35";
    $age3['Ben'] = "37";
    $age3['Joe'] = "43";

    echo "$age1[Peter], $age2[Ben], $age3[Joe]";
?>
