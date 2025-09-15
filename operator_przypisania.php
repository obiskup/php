<?php
    $a = 3; //przypisanie
    $b = &$a; // $b jest referencją do $a

    print "$a\n"; //3
    print "$b\n"; //3

    $a = 4; //zmiana $a

    print "$a\n"; //4
    print "$b\n"; //4
?>