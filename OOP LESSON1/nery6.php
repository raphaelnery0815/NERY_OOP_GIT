<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php 

for ($i = 5; $i >= 1; $i--) {
    for ($y = 1; $y <= $i; $y++) {
        echo "<b>★";
    }
    echo "<br>";
}
    ?>
</body>
</html>