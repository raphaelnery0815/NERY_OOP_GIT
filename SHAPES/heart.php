<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

for ($i = 0; $i < 6; $i++) {
    for ($y = 0; $y < 7; $y++) {
        if (($i == 0 && $y % 3 != 0) || ($i == 1 && $y % 3 == 0) || ($i - $y == 2) || ($i + $y == 8)) {
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>
</body>
</html>