<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/besteak.css">
    <title>Fresadora</title>
</head>
<body>
<?php require_once("../supplier/header.php") ?>
    <div class="botoiak">
        <div class="botoiaTextua"><h1>Fresadora:</h1></div>
        <button onclick="redirectToInfo('F-1')">F-1</button>
        <button onclick="redirectToInfo('F-2')">F-2</button>
        <button onclick="redirectToInfo('F-3')">F-3</button>
        <button onclick="redirectToInfo('F-4')">F-4</button>
        <button onclick="redirectToInfo('F-5')">F-5</button>
        <button onclick="redirectToInfo('F-6')">F-6</button>
        <button onclick="redirectToInfo('F-7')">F-7</button>
        <button onclick="redirectToInfo('F-8')">F-8</button>
        <button onclick="redirectToInfo('F-9')">F-9</button>
        <button onclick="redirectToInfo('F-10')">F-10</button>
        <button onclick="redirectToInfo('F-11')">F-11</button>
        <button onclick="redirectToInfo('F-12')">F-12</button>
    </div>  
    <div class="footer">
        <div class="argazkiaFooter"><img src="../../../public/Argazkiak/goierri_logo.jpg" alt=""></div>
        <div class="textoFooter">
            <p>Arromendia 2, 20240 ORDIZIA (GUIPUZKOA) <br> Tel: (+34)943 88 00 62 <br> email: bulegoa@goierrieskola.eus</p>
        </div>
    </div>

    <script>
        function redirectToInfo(machineId) {
            window.location.href = `informazioaFF.php?id=${machineId}`;
        }
    </script>
</body>
</html>
