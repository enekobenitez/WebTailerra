
<?php
// Incluir el archivo head.php que contiene las configuraciones iniciales
require_once("../supplier/_parts/head.php");

// Conexión a la base de datos (ajustar según tu configuración)
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

// Realizar la consulta para obtener las máquinas de Fresadora
$sql = "SELECT Zenbakia FROM makinak WHERE Zenbakia LIKE 'F%'";
$result = $conn->query($sql);

// Mostrar errores de MySQL si hay alguno
if (!$result) {
    die("Error al obtener máquinas Fresadora: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Máquinas Fresadora</title>
    <link rel="stylesheet" href="informazioa.css"> <!-- Ajusta la ruta del archivo CSS -->
</head>
<body>
    <div class="botoiak">
        <div class="botoiaTextua"><h1>Fresadora:</h1></div>
        <?php
        // Generar botones dinámicamente
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<button onclick="redirectToInfo(\'' . htmlspecialchars($row['Zenbakia']) . '\')">' . htmlspecialchars($row['Zenbakia']) . '</button>';
            }
        } else {
            echo '<p>No hay máquinas Fresadora disponibles.</p>';
        }
        ?>
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

<?php
// Cerrar la conexión
$conn->close();
?>

