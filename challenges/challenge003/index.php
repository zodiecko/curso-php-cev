<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Conversor de moedas</title>
</head>

<body>
    <header>
        <h1>Conversor de Moedas V1.0</h1>
    </header>

    <main>
        <form action="cad.php" method="get">
            <label><strong>Quantos reais você tem na carteira?</strong></label>
            <input type="number" name="moeda-real" id="idReal" step="0.01">
            <input type="submit" value="Converter">
        </form>
    </main>

</body>

</html>