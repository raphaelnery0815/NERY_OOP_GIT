<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
$size = 5;
    
for ($i = 1; $i <= $size; $i++) {
    for ($j = $size; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i * 2 - 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= $size - 1; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
        echo "*";
    }
    echo "<br>";
}
?>  
</body>
</html>