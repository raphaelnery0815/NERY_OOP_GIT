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

for($i = 0; $i < $size; $i++) {
    for($j = 0; $j < $size - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($k = 0; $k < 2 * $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

</body>
</html>