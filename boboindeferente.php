<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão8</title>
</head>
<body>
    <form action= "questãoBOB.php" method="get">
        <div class="form-group">
            <h3>QuestãoBOB</h3>
            Digite o valor do investimento: <input type="text" name ="frase"> 
                   
        </div>
        <button type="submit" class="btn"> ENVIAR </button>
    </form>




<?php
    $frase = $_REQUEST[];

    if (ctype_upper($frase)){
        echo "Calma aí";
    }

?>