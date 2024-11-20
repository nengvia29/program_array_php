<html>
<head>
    <title>Mencetak Nilai Tertinggi</title>
</head>
<body>
<?php 
    $nilai[1] = 40;
    $nilai[2] = 56;
    $nilai[3] = 90;
    $nilai[4] = 70;
    $MAX = $nilai[1];
    
    for ($i = 2; $i <= 4; $i++) {
        if ($MAX < $nilai[$i]) {
            $MAX = $nilai[$i];
        }
    }
    
    echo "NILAI TERTINGGI = " . $MAX;
?>
</body>
</html>
