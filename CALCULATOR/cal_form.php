<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            background-image: url(bg.jpg);
            background-repeat: no-repeat;
            background-size: cover; 
            width: 100%;
            height: 100%;
        }
        
        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .name {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        .form-container {
            margin-top: 20px; /* Adjust margin as needed */
        }
    </style>
</head>
<body>
    <div class="centered-content">
        <div class="name">
            <h1><b>PHP OOP CALCULATOR</b></h1>
        </div>
        <div class="form-container mt-5" >
            <form action="calc.php" method="POST">
                <input type="text" name="num1Inserted" required placeholder="Input Number">

                <select name="calInserted" class="btn btn-secondary dropdown-toggle">
                    <option value="add">ADD</option>
                    <option value="sub">SUBTRACT</option>
                    <option value="mul">MULTIPLY</option>
                    <option value="div">DIVISION</option>
                </select>

                <input type="text" name="num2Inserted" required placeholder="Input Number">
                <button type="submit" class="btn btn-success">CALCULATE</button>
            </form>
        </div>
    </div>
</body>
</html>
