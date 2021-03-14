<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required/>
        <label for="contagem">Contagem: </label>
        <select name="contagem" id="contagem" required>
            <option value="" selected>Selecione um contagem</option>
            <?php for($i = 1; $i < 100; $i++){?>
                <option value="<?=$i?>" ><?=$i?></option>
            <?}?>
        </select>
        <label>Contador Interno:</label>
        <input type="radio" name="cont_interno" id="sim" value="sim" required/>
        <label for="sim">Sim</label>
        <input type="radio" name="cont_interno" id="nao" value="nao" required/>
        <label for="nao">Não</label>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>