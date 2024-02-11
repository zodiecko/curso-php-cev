<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $number = $_GET["number"];
    $squareRoot = sqrt($number);
    $cubeRoot = pow($number, 1 / 3);
    ?>
    <main>
        <h1>Enter a Number:</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="number">Number:</label>
            <input type="number" name="number" id="number" value="<?= $number ?>" min="0" required>
            <input type="submit" value="Calculate roots">
        </form>


        <section>
            <h1>Final Result</h1>
            <p>Analising the number <strong><?= $number ?></strong>:</p>
            <ul>
                <li>The square root is: <?= number_format($squareRoot, 2, ",", ".") ?></li>
                <li>The cube root is : <?= number_format($cubeRoot, 2, ",", ".") ?></li>
            </ul>
        </section>
    </main>
</body>

</html>