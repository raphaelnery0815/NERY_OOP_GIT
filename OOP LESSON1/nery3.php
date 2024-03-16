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
    
    function familyName($fname, $year, $age, $city){
        echo "<h1>$fname Nery<h1> Born in $year with an age of $age living in $city<br><br>";
    }

    familyName("Raphael", "2004", "19", "Manila.");
    familyName("Paul", "2003", "20","Las pinas.");
    familyName("Mabie", "2003", "20", "Makati.");
    familyName("Josh", "2004", "19", "Baguio.");
   
    ?>
</body>
</html>