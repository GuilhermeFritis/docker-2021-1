<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu mês</title>
</head>
<body>
<h1>
    <?php
        echo getMes($_GET['mes']);
    ?>
</h1>
</body>
</html>

<?php
 function getMes($mes){
    switch ($mes) {
        case '1':
            return "Janeiro";
            break;            
        case '2':
            return "Fevereiro";
            break;            
        case '3':
            return "Março";
            break;            
        case '4':
            return "Abril";
            break;            
        case '5':
            return "Maio";
            break;            
        case '6':
            return "Junho";
            break;            
        case '7':
            return "Julho";
            break;            
        case '8':
            return "Agosto";
            break;            
        case '9':
            return "Setembro";
            break;            
        case '10':
            return "Outubro";
            break;            
        case '11':
            return "Novembro";
            break;            
        case '12':
            return "Dezembro";
            break;            
        default:
            return "Algo deu errado!";
            break;
    }
 }
?>

