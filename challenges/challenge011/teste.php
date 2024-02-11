<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge PHP - Curso em Vídeo</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function showRangeValue(element) {
            document.getElementById("dis_range_val").innerHTML = element.value;
        }
    </script>
</head>

<body>
    <main>
        <input type="range" name="percentage" id="percentage" min="0" value="0" max="100" oninput="showRangeValue(this)">
        <span id="dis_range_val">0</span>
    </main>
</body>

</html>