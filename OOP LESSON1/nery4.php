<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php  
    
    function setHeight ($minHeight = 50) {
        echo "<h1>The height is: $minHeight <br><br><h1>";
    }

    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);    
    
    
    ?>
</body>
</html>