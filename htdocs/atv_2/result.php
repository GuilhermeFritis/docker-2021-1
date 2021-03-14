<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php for($i = 1; $i <= $_POST['contagem']; $i++){
    echo $_POST['nome'] . " conta " . $i . ", <br>";
    echo $_POST['nome'] . " conta " . $i . ", <br>";
    echo "É ";
    if($_POST['cont_interno'] == "sim"){
        for($cont = 1; $cont <= $i; $cont++){
            echo $cont.", é ";  
        }
    }  
    echo "<br>" . substr($_POST['nome'], -3) . ", viva a " . $_POST['nome'] . "!<br>";
    echo "Viva a " . $_POST['nome'] . "!<br><br>";
}?>
</body>
</html>
 