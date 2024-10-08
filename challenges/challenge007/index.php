<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 007 Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    function padrao($salaryInput)
    {
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        return numfmt_format_currency($padrão, $salaryInput, "BRL");
    }
    $salary = $_REQUEST["salary"] ?? 0;
    $minimumWageBR = 1412;
    $qtyms = intdiv($salary, $minimumWageBR);
    $remainder = $salary - ($qtyms * $minimumWageBR);
    ?>
    <main>
        <h1>Enter your salary</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salary">Enter your salary</label>
            <input type="number" name="salary" id="salary" step="0.01" value="<?= $salary ?>" required>
            <label>Minimum wage is: <?= padrao($minimumWageBR) ?></label>
            <input type="submit" value="Calculate">
        </form>
        <section>
            <h1>Final result</h1>
            <p>The salary <?= padrao($salary) ?> correspond to <?= $qtyms ?> minimum wages + <?= padrao($remainder) ?></p>
        </section>
    </main>

</body>

</html>