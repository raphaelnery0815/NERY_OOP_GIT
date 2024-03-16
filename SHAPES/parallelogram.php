<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$height = 5;
$width = 14;

for ($row = 0; $row < $height; $row++) {
    for ($space = 0; $space < $row; $space++) {
        echo "&nbsp;";
    }
    for ($col = 0; $col < $width; $col++) {
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>