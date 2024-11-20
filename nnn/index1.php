<html>
    <head>
        <title>Program Array PHP</title>
        <?php 
        function Segi4()
        {
            global $C;
            echo "\$C=$C";
        }
        ?>
    </head>
<body>
    <h1>Variabel Global</h1>
    <br/>
    <?php 
    $A = 10;
    $B = 20;
    $C = $A * $B;
    Segi4();
    ?>
</body>
</html>