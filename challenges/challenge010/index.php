<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $thisYear = date("Y");
        $year = $_GET["year"];
        $yearAge = $_GET["year-age"];
        $age = $yearAge - $year;
        ?>
        <h1>Calculing your age</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="year">what year were you born?</label>
            <input type="number" name="year" id="year" min="1900" max="<?= $thisYear ?>" <?= $year ?>" required>
            <label for="year-age">do you want to know your age in what year?(currently: <?= $thisYear ?>)</label>
            <input type="number" name="year-age" id="year-age" min="<?= $year ?>" value="<?= $yearAge ?>" required>
            <input type="submit" value="How old you will be?">
        </form>

        <section>
            <h1>Result</h1>
            <p>Who borned in <?= $year ?> will be <?= $age ?> old</p>
        </section>
    </main>
</body>

</html>