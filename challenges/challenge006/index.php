<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy of the division</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $dividend = $_REQUEST["dividend"] ?? 0;
    $divisor = $_REQUEST["divisor"] ?? 1; //Deve ser 1 senão não inicializa por causa da divisão por 0
    $resto = $dividend % $divisor;
    $quotient = intdiv($dividend, $divisor);
    ?>
    <main>
        <h1>Anatomy of a Division</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividend">Dividend</label>
            <input type="number" name="dividend" id="dividend" min="0" value="<?= $dividend ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <input type="submit" value="Analyze">
        </form>
    </main>
    <section>
        <h1>Division Structure</h1>
        <table class="divisao">
            <tr>
                <td><?= $dividend ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quotient ?></td>
            </tr>
        </table>
    </section>
</body>

</html>