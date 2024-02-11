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
    $dividendo = $_REQUEST["dividendo"];
    $divisor = $_REQUEST["divisor"];
    $resto = $dividendo % $divisor;
    $quociente = intdiv($dividendo, $divisor);
    ?>
    <main>
        <h1>Anatomy of a Division</h1>

        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h1>Division Structure</h1>
        <table>
            <tr>
                <td>Dividend: <?= $dividendo ?></td>
                <td>Divisor: <?= $divisor ?></td>
            </tr>
            <tr>
                <td>Remainder: <?= $resto ?></td>
                <td>Quotient: <?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>

</html>