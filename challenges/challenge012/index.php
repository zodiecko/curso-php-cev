<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 12 - Curso em Vídeo - PHP Módulo 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $week = 60 * 60 * 24 * 7;
    $day = 60 * 60 * 24;
    $hour = 60 * 60;
    $minute = 60;

    $totalSeconds = $_GET["seconds"] ?? 0;

    $weeks = intdiv($totalSeconds, $week);
    $remainder = $totalSeconds % $week;
    $days = intdiv($remainder, $day);
    $remainder = $remainder % $day;
    $hours = intdiv($remainder, $hour);
    $remainder = $remainder % $hour;
    $minutes = intdiv($remainder, $minute);
    $seconds = $remainder % $minute;
    ?>

    <main>
        <h1>Time Calculator</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="seconds">What is the time in seconds?</label>
            <input type="number" name="seconds" id="seconds" min="0" value="<?= $totalSeconds ?>" required>
            <input type="submit" value="Calculate">
        </form>
        <section>
            <h1>Result</h1>
            <ul>
                <li><?= $weeks ?> weeks</li>
                <li><?= $days ?> days</li>
                <li><?= $hours ?> hours</li>
                <li><?= $minutes ?> minutes</li>
                <li><?= $seconds ?> seconds</li>
            </ul>
        </section>
    </main>
</body>

</html>