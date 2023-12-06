<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
    .
    <div class="jumbotron-fluid">
        <div class="container">
            <h1>Kalkulator BMI</h1>
            <p>Oto Twó wynik pomiaru BMI. </p>
            <?php 
            
            if ($_POST) {
                $weight = $_POST['weight']; 
                $height = $_POST['height'];

                echo "Dziękujemy za przesłanie formularza. <br>";
                $bmi = $weight / pow($height, 2);
                echo "Twoje bmi wynosi " . round($bmi,  2); 

            }

            ?>
        </div>
    </div>
    .
    <div class="container">
        
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
