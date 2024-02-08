<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalhando com números aleatórios</title>
</head>

<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <p>Gerando um número aleatório entre 0 e 100. <br></p>
        <?php
        $numeroAleatorio = rand(0, 100);
        echo "<p>O valor gerado foi <strong>$numeroAleatorio</strong></p>";
        ?>
        <button type="submit" name="gerarNumero">Gerar número</button>
    </main>
</body>

</html>