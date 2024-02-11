<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Arithmetic Averages</h1>
    <main>
        <?php
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $weight1 = $_GET["weight1"] ?? 1; //Deve ser 1 para evitar divisão por zero
        $weight2 = $_GET["weight2"] ?? 1;

        $average = ($v1 + $v2) / 2;

        $weightedAverage = ($v1 * $weight1 + $v2 * $weight2) / ($weight1 + $weight2);

        ?>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="v1">1º valor:</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>" required>
            <label for="weight1">1º peso:</label>
            <input type="number" name="weight1" id="weight1" value="<?= $weight1 ?>" required>
            <label for="v2">2º valor:</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>" min="1" required>
            <label for="weight2">2º peso:</label>
            <input type="number" name="weight2" id="weight2" value="<?= $weight2 ?>" min="1" required>
            <input type="submit" value="Calculate Average">
        </form>
        <section>
            <h1>Calculating averages</h1>
            <ul>
                <li>The avarage is : <strong><?= number_format($average, 1) ?></strong></li>
                <li>The weighted average is: <strong><?= number_format($weightedAverage, 1) ?></strong></li>
            </ul>
        </section>
    </main>
</body>

</html>