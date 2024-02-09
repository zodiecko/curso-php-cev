<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Trabalhando com números aleatórios</title>
</head>

<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php
        $minimo = 0;
        $maximo = 10;
        $numeroAleatorio = mt_rand($minimo, $maximo);
        ?>
        <p>Gerando um número aleatório entre <?php echo $minimo; ?> e <?php echo $maximo; ?> <br></p>
        <!--         
        //rand() - 1951 - Linear Congrential Generator
        //mt_rand() - 1997 - Mersenne Twister mais confiavel e rápido
        //a partir de 7.1 rand() e mt_rand() usam o mesmo algoritmo Mersenne Twister
        //para segurança random_int() - criptograficamente seguro mas lento
        // ver como alterar pelo id -->
        <p>O valor gerado foi <strong><?php echo $numeroAleatorio; ?></strong></p>

        <input type="button" value="Gerar número" onclick="location='index.php'">
        <!-- <button onclick="javascript:document.location.reload()">Atualizar página</button> -->
        <!-- <a href="index.php">Gerar número</a> -->
    </main>
</body>

</html>