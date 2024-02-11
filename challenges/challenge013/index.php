<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 13 - Curso em Vídeo - PHP Módulo 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    function padrao($valor)
    {
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        return numfmt_format_currency($padrão, $valor, "BRL");
    }

    $reais = $_GET["reais"];
    $hundredBill = intdiv($reais, 100);
    $remainder = $reais % 100;
    $fiftyBill = intdiv($remainder, 50);
    $remainder = $remainder % 50;
    $tenBill = intdiv($remainder, 10);
    $fiveBill = intdiv($remainder % 10, 5);
    ?>

    <main>
        <h1>Automatic Teller Machine</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="reais">How much do you want to withdraw? (R$)*</label>
            <input type="number" name="reais" id="reais" min="5" step="5" value="<?= $reais ?>" required>
            <label>*Real bills available: R$100, R$50, R$10, R$5*</label>
            <input type="submit" value="Cash Withdrawal">
        </form>
        <section>
            <h1>Withdrawal of <?= padrao($reais) ?></h1>
            <ul>
                <li><img src="img/100_reais.jpg" alt="Hundred real bill" width="150" height="50">x<?= $hundredBill ?></li>
                <li><img src="img/50_reais.png" alt="Fifty real bill" width="150" height="50"> x<?= $fiftyBill ?></li>
                <li><img src="img/10_reais.jpg" alt="Ten real bill" width="150" height="50"> x<?= $tenBill ?></li>
                <li><img src="img/5_reais.jpg" alt="Five real bill" width="150" height="50"> x<?= $fiveBill ?></li>
            </ul>
        </section>
    </main>
</body>

</html>