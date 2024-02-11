<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
    <!-- To show the modification of the range -->
    <script type="text/javascript">
        function showRangeValue(element) {
            document.getElementById("displayPercentage").innerHTML = element.value;
        }
    </script>
</head>

<body>
    <?php
    function padrao($valor)
    {
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        return numfmt_format_currency($padrão, $valor, "BRL");
    }
    $price = $_GET["price"] ?? 0;
    $percentage = $_GET["percentage"] ?? 0;
    $newPrice = $price * (1 + $percentage / 100);
    ?>
    <main>
        <h1>Price Readjuster</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="price">Price of the Product (R$)</label>
            <input type="number" name="price" id="price" step="0.01" value="<?= $price ?>">
            <label for="percentage">What will the percentage increase be? <strong id="displayPercentage"><?= $percentage ?></strong><strong>%</strong></label>
            <input type="range" name="percentage" id="percentage" min="0" value="<?= $percentage ?>" max="100" oninput="showRangeValue(this)">
            <input type="submit" value="Readjust">
        </form>
        <section>
            <h1>Result of the increase</h1>
            <p>The product with a price of <strong><?= padrao($price) ?></strong> with <strong><?= $percentage ?></strong>% increase will be cost <strong><?= padrao($newPrice) ?></strong>
            </p>
        </section>
    </main>
</body>

</html>