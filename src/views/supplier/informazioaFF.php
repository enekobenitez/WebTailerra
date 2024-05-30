<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/informazioa.css">
    <title>Fresadora</title>
</head>
<body>
<?php require_once("../supplier/header.php") ?>

<?php
    $machineId = isset($_GET['id']) ? $_GET['id'] : 'F-1'; // Default to F-1 if no id is set
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const machineId = "<?php echo $machineId; ?>";
        document.getElementById("F_konponketa").innerText = machineId;
    });
</script>

<div class="osoa">
    <h1><?php echo $machineId; ?></h1>
    <div class="osoa1">
        <table borde>
            <tr>
                <th>Makinaren izendapena</th>
                <td id="F_konponketa"><?php echo $machineId; ?></td>
            </tr>
            <tr>
                <th>Marka</th>
                <td>CME</td>
            </tr>
            <tr>
                <th>Modelo</th>
                <td>FU2CMC</td>
            </tr>
            <tr>
                <th>Fabrikazio Urtea</th>
                <td>1993</td>
            </tr>
            <tr>
                <th>Erosketa Urtea</th>
                <td>1993</td>
            </tr>
            <tr>
                <th>Kokapena</th>
                <td>107 TAILERRA</td>
            </tr>
            <tr>
                <th>Aktibo zenbakia</th>
                <td>128</td>
            </tr>
            <tr>
                <th>CE marka (Bai/Ez)</th>
                <td>BAI</td>
            </tr>
            <tr>
                <th>1215era egokiturik? (Aurrekoa ezezkoa bada)</th>
                <td></td>
            </tr>
            <tr>
                <th>Oharrak</th>
                <td></td>
            </tr>
        </table>
    </div>
    <div class="osoa2">
        <h1>Babeserako Ekipoak</h1>
        <div class="osoa2textua">
            <div class="puntoak">
                <ol>
                    <li>Betaurrekoak</li>
                    <li>Altzairuzko punta duen segurtasun botak</li>
                    <li>Txaketa, buzoa edo bata</li>
                    <li>Eskularruak</li>
                </ol>
            </div>
            <div class="argazkia">
                <img src="../../../public/Argazkiak/señales.png" alt="">
            </div>
        </div>
    </div>
    <div class="osoa3">
        <h1>Arriskuak</h1>
        <div class="puntua">
            <div class="elementua">
                <li>Soinean dugun zerbait, makinaren mugitzen ari den atalen batean korapilatzen: mahukak, lepokoak, hilea</li>
                <img src="../../../public/Argazkiak/arriskua1.png" alt="">
            </div>
            <div class="elementua">
                <li>Piezen bizarrekin, hertz bizikin, kutxilekin... ebakiak egiteko arriskua</li>
                <img src="../../../public/Argazkiak/arriskua2.png" alt="">
            </div>
            <div class="elementua">
                <li>Plateretik irteten zerbaitekin kolperen bat hartzen: pieza edo plateraren giltza</li>
                <img src="../../../public/Argazkiak/arriskua3.png" alt="">
            </div>
            <div class="elementua">
                <li>Irrits egitea lurrean egon daiteken olioarekin</li>
                <img src="../../../public/Argazkiak/arriskua4.png" alt="">
            </div>
        </div>
    </div>
    <div class="osoa4">
        <h1>Produktu Kimikoak</h1>
        <li>MQL: Mikrolubrikaziorako olioa:</li>
        <li class="margina">LUBRI FLUID (HRE HIDRAULAC)</li>
        <li>Abiadura eta aitzapen kaxaroko olioa:</li>
        <li class="margina">AZOLLO ZS 68 (TOTAL ESPAÑA)</li>
        <li>Gidak eta elementuak labaintzeko olioa:</li>
        <li class="margina">DROSERA MS 68 (TOTAL ESPAÑA)</li>
    </div><br>
    <div class="osoa5">
        <h1>Atalak</h1>
        <div>
            <div>
                <ol>
                    <li>Gorputza</li>
                    <li>Zubia</li>
                    <li>Erremintza etxearen ardatza</li>
                    <li>Mentsula</li>
                    <li>Orga mahi etxea</li>
                    <li>Mahaia</li>
                
                </ol>
            </div>
            <div>
                <img src="../../../public/Argazkiak/fresadorea2.png" alt="">
            </div>
        </div>
    </div>
   
    <div class="osoa7">
        <h1>Erabilpena</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9_j7Lp-e3PY?si=RU7ZsE5P_fHi3Cc0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<div class="footer">
    <div class="argazkiaFooter"><img src="../../../public/Argazkiak/goierri_logo.jpg" alt=""></div>
    <div class="textoFooter">
        <p>Arromendia 2, 20240 ORDIZIA (GUIPUZKOA) <br> Tel: (+34)943 88 00 62 <br> email: bulegoa@goierrieskola.eus</p>
    </div>
</div>
</body>
</html>
