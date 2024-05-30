<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/besteak.css">
    <title>Tornoa</title>
</head>
<body>
<?php require_once("../supplier/header.php") ?>
    <div class="botoiak">
        <div class="botoiaTextua"><h1>Tornoa:</h1></div>
        <button onclick="redirectToInfo('T-1')">T-1</button>
        <button onclick="redirectToInfo('T-2')">T-2</button>
        <button onclick="redirectToInfo('T-3')">T-3</button>
        <button onclick="redirectToInfo('T-4')">T-4</button>
        <button onclick="redirectToInfo('T-5')">T-5</button>
        <button onclick="redirectToInfo('T-6')">T-6</button>
        <button onclick="redirectToInfo('T-7')">T-7</button>
        <button onclick="redirectToInfo('T-8')">T-8</button>
        <button onclick="redirectToInfo('T-9')">T-9</button>
        <button onclick="redirectToInfo('T-10')">T-10</button>
        <button onclick="redirectToInfo('T-11')">T-11</button>
        <button onclick="redirectToInfo('T-12')">T-12</button>
    </div>  
    <div class="footer">
        <div class="argazkiaFooter"><img src="../../../public/Argazkiak/goierri_logo.jpg" alt=""></div>
        <div class="textoFooter">
            <p>Arromendia 2, 20240 ORDIZIA (GUIPUZKOA) <br> Tel: (+34)943 88 00 62 <br> email: bulegoa@goierrieskola.eus</p>
        </div>
    </div>

    <script>
        function redirectToInfo(machineId) {
            window.location.href = `informazioa.php?id=${machineId}`;
        }
    </script>
</body>
</html>
