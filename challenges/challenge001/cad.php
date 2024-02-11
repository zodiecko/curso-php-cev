<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $numero = $_GET["numero"] ?? "Nenhum número informado";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        ?>
        <p>O número escolhido foi: <strong><?php echo $numero; ?></strong></p>
        <p>O antecessor é: <?php echo $antecessor; ?> <br></p>
        <p>O sucessor é: <?php echo $sucessor; ?></p>
        <!-- <button onclick="location='index.php'">Voltar</button> -->
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>