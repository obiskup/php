<head>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
    <?php
        $x = 1;
        while($x <= 5){
            echo "\t<tr><td>X</td><td>$x</td></tr>\n";
            $x++;
        }
    ?>
    </table>
</body>
