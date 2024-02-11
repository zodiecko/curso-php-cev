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
        <h1>Conversor de Moedas V2.0</h1>
    </header>

    <main>
        <?php
        $início = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27' . $início . '%27&@dataFinalCotacao=%27' . $fim . '%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotaçãoDolar = $dados["value"][0]["cotacaoCompra"];

        $reais = $_REQUEST["moeda-real"];
        $dolar = $reais / $cotaçãoDolar;
        ?>
        <!-- number_format(valor, casas decimais, separador de decimal, separador de milhar) -->
        <p>Seus R$ <strong><?php echo number_format($reais, 2, ",", "."); ?></strong> equivalem a : U$ <strong><?php echo number_format($dolar, 2, ",", "."); ?></strong> <br><br></p>
        <!-- formatação de moedas com internacionalização -->
        <?php $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY); ?>
        <p>Seus <?php echo numfmt_format_currency($padrão, $reais, "BRL"); ?> equivalem a <?php echo numfmt_format_currency($padrão, $dolar, "USD");    ?></p>
        <p><strong>Cotação do Banco Central <?php echo $cotaçãoDolar; ?></strong></p>
        <button type="button" onclick="javascript:history.go(-1)">Voltar</button>
    </main>

</body>

</html>