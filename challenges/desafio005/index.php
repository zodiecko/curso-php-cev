<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de número real</title>
</head>

<body>
    <header>
        <h1>Analisador de número real</h1>
    </header>
    <main>
        <form action="analise.php" method="get">
            <label for="numeroReal">Número Real:</label>
            <input type="number" name="numeroReal" id="idNumero" step="0.001">
            <input type="submit" value="Analisar">
        </form>
    </main>
</body>

</html>