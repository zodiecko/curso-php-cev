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
        <?php
        $reais = $_GET["moeda-real"];
        $cotaçãoDolar = 4.99;

        $dolar = $reais / $cotaçãoDolar;
        ?>
        <!-- number_format(valor, casas decimais, separador de decimal, separador de milhar) -->
        <p>Seus R$ <strong><?php echo number_format($reais, 2, ",", "."); ?></strong> equivalem a : U$ <strong><?php echo number_format($dolar, 2, ",", "."); ?></strong> <br><br></p>
        <!-- formatação de moedas com internacionalização -->
        <?php $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); ?>
        <p>Seus <?php echo numfmt_format_currency($padrão, $reais, "BRL"); ?> equivalem a <?php echo numfmt_format_currency($padrão, $dolar, "USD");    ?></p>
        <p><strong>Cotação fixa de R$ 4,99 (fev/24)</strong></p>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>