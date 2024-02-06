<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <?php
    // ox => hexadecimal ob => binário 0 = >octal
    // $numero = 0x1A; //hexadecimal
    // echo "O número é $numero <br>";//26
    // $numero = 0b11010;
    // echo "O número é $numero <br>";//26
    // $numero = 032;
    // echo "O número é $numero";//26
    
    $variavel = "Fábio";
    // var_dump($variavel);
    // $pontenciacao = 3e2; //float = 3*10^2 = 300
    // echo $pontenciacao;
    
    // $vetor = [7, "goiaba", 3.14, false];
    // echo "$vetor[1]"; //goiaba
    // echo "\u{1F418}";
    // echo '\u{1F418}';
    
    echo <<<TESTE
        $variavel olá 
        texto aqui. \u{1F596}
    TESTE;

    ?>
</body>

</html>