<?php 
require_once("../supplier/_parts/head.php");

// Conexión a la base de datos (debes ajustar estos valores según tu configuración)
$servername = "127.0.0.1";
$username = "root";
$password = "1WMG2023";
$database = "mekanizatua";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el ID de la máquina desde la URL
$machineId = isset($_GET['id']) ? $_GET['id'] : 'F-1'; 

// Extraer solo el número del ID de la máquina
$machineNumber = ltrim($machineId, 'F-');

// Convertir $machineNumber a tipo numérico (int)
$machineNumber = intval($machineNumber);

// Sumar 12 al número de la máquina
$machineNumber += 12;

// Realizar la consulta para obtener la información de la máquina
$sql = "SELECT Zenbakia, Marka, Modeloa, Kokapena, AktbZenbakia, CEmarka FROM makinak WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $machineNumber);
$stmt->execute();
$result = $stmt->get_result();

// Variables para almacenar la información de la máquina
$izendapena = 'N/A';
$marka = 'N/A';
$modeloa = 'N/A';
$kokapena = 'N/A';
$aktiboZenbakia = 'N/A';
$CEmarka = 'N/A';

// Verificar si se encontró alguna fila
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $izendapena = $row['Zenbakia'];
    $marka = $row['Marka'];
    $modeloa = $row['Modeloa'];
    $kokapena = $row['Kokapena'];
    $aktiboZenbakia = $row['AktbZenbakia'];
    $CEmarka = $row['CEmarka'];
}

// Realizar la consulta para obtener los botones de fresadora disponibles
$sqlButtons = "SELECT Zenbakia FROM makinak WHERE Izena = 'Fresadora'";
$resultButtons = $conn->query($sqlButtons);

// Arreglo para almacenar los números de fresadora disponibles
$fresadoraNumbers = [];

// Verificar si se encontraron resultados
if ($resultButtons->num_rows > 0) {
    while ($row = $resultButtons->fetch_assoc()) {
        $fresadoraNumbers[] = $row['Zenbakia'];
    }
}

// Realizar la consulta para obtener los elementos de protección (babes_elementuak)
$sqlBabes = "SELECT Izena FROM babes_elementuak";
$resultBabes = $conn->query($sqlBabes);

// Arreglo para almacenar los nombres de elementos de protección
$babesElementuak = [];

// Verificar si se encontraron resultados
if ($resultBabes->num_rows > 0) {
    while ($row = $resultBabes->fetch_assoc()) {
        $babesElementuak[] = $row['Izena'];
    }
}

// Realizar la consulta para obtener los riesgos (arriskuak)
$sqlArriskuak = "SELECT deskribapena FROM arriskuak";
$resultArriskuak = $conn->query($sqlArriskuak);

// Arreglo para almacenar las descripciones de riesgos
$arriskuak = [];

// Verificar si se encontraron resultados
if ($resultArriskuak->num_rows > 0) {
    while ($row = $resultArriskuak->fetch_assoc()) {
        $arriskuak[] = $row['deskribapena'];
    }
}

// Cerrar la conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informazioa Fresadora</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ajusta la ruta según la ubicación de tu archivo CSS -->
</head>
<body>
    <div class="botoiak">
        <div class="botoiaTextua"><h1>Fresadora:</h1></div>
        <?php 
        foreach ($fresadoraNumbers as $number) {
            echo "<button onclick=\"redirectToInfo('F-" . $number . "')\">F" . $number . "</button>";
        }
        ?>
    </div>  

    <div class="osoa">
        <h1><?php echo strtoupper($machineId); ?></h1>
        <div class="osoa1">
            <table border="1">
                <tr>
                    <th>Makinaren izendapena</th>
                    <td><?php echo $izendapena; ?></td>
                </tr>
                <tr>
                    <th>Marka</th>
                    <td><?php echo $marka; ?></td>
                </tr>
                <tr>
                    <th>Modelo</th>
                    <td><?php echo $modeloa; ?></td>
                </tr>
                <tr>
                    <th>Kokapena</th>
                    <td><?php echo $kokapena; ?></td>
                </tr>
                <tr>
                    <th>Aktibo zenbakia</th>
                    <td><?php echo $aktiboZenbakia; ?></td>
                </tr>
                <tr>
                    <th>CE marka (Bai/Ez)</th>
                    <td><?php echo $CEmarka; ?></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="osoa2">
        <h1>Babeserako Ekipoak</h1>
        <div class="osoa2textua">
            <div class="puntoak">
                <ol>
                    <?php 
                    foreach ($babesElementuak as $elementua) {
                        echo "<li>" . $elementua . "</li>";
                    }
                    ?>
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
                <ol>
                    <?php 
                    foreach ($arriskuak as $arriskua) {
                        echo "<li>" . $arriskua . "</li>";
                    }
                    ?>
                </ol>
            </div>
        </div>
        <div class="argazkia">
            <img src="../../../public/Argazkiak/arriskua1.png" alt="">
        </div>
    </div>

    <script>
        function redirectToInfo(machineId) {
            window.location.href = `informazioaFF.php?id=${machineId}`;
        }
    </script>

    <div class="footer">
        <div class="argazkiaFooter"><img src="../../../public/Argazkiak/goierri_logo.jpg" alt=""></div>
        <div class="textoFooter">
            <p>Arromendia 2, 20240 ORDIZIA (GUIPUZKOA) <br> Tel: (+34)943 88 00 62 <br> email: bulegoa@goierrieskola.eus</p>
        </div>
    </div>
</body>
</html>


