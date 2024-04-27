<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<style>
 .name {
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    
 }
 .row {
    text-align: center;
    justify-content: center;
 }

</style>

     <div class = "name">
     <h1><b>PHP OOP GWA CALCULATOR<b></h1>
     </div>
    <div class= "row">
  <form action="calc.php" method="POST" class = "col-md-5">
      <input type="text" class="form-control" name="num1Inserted" placeholder="Input First Grade">
      <input type="text" class="form-control" name="num2Inserted" placeholder="Input Second Grade">
      <input type="text" class="form-control" name="num3Inserted" placeholder="Input Third Grade">
      <input type="text" class="form-control" name="num4Inserted" placeholder="Input Fourth Grade">
      <button type="submit" class="btn btn-success">CALCULATE</button>
        <option value="div"></option>
    </form>
  
</div>

</body>
</html>