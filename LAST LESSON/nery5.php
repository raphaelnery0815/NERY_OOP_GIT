<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <center>
    <?php 
    
    function sum ($x, $y){
        $z = $x + $y;
        return $z;
    }
    
    echo "<h1> 5 + 10 = ".sum(5, 10). "<br>";
    echo "<h1> 7 + 13 = ".sum(7, 13). "<br>";
    echo "<h1> 2 + 4 = ".sum(2, 4);
    
    ?>
</body>
</html>