<html>
    <head>
        <title>Variabel Local</title>
        <?php
        function Segi4($A, $B)
        {
            $C = $A * $B;
        echo "\$C = $C";
        } 
        ?>
    </head>
<body>
    <h1>Call Variabel Lokal</h1>
    <br>
<?php 
Segi4(10, 20);
?>
</body>
</html>