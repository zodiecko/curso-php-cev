<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado da Análise</title>
</head>

<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
        function padrao($numero)
        {
            return number_format($numero, 3, ",", ".");
        }
        $numeroReal = $_GET["numeroReal"];
        $parteInteira = (int)$numeroReal;
        $parteDecimal = $numeroReal - $parteInteira;
        ?>
        <p>Analisando o número <strong><?php echo padrao($numeroReal); ?></strong> informado pelo usuário:</p>
        <ul>
            <li>A parte inteira é: <strong><?php echo number_format($parteInteira, 0, ",", "."); ?></strong></li>
            <li>A parte decimal é: <strong><?php echo padrao($parteDecimal); ?></strong></li>
        </ul>

        <button type="submit" onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>