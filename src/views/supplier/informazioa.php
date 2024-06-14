<?php
require_once ("../supplier/_parts/head.php");

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

// Obtener el ID de la máquina desde la URL y extraer el número sin el prefijo "T-"
$machineId = isset($_GET['id']) ? intval(str_replace('T-', '', $_GET['id'])) : 1;

// Realizar la consulta para obtener la información de la máquina
$sql = "SELECT * FROM makinak WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $machineId);
$stmt->execute();
$result = $stmt->get_result();

// Verificar si se encontró alguna fila
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $marka = $row['Marka'];
    $modeloa = $row['Modeloa'];
    $kokapena = $row['Kokapena'];
    $CEmarka = $row['CEmarka'];
    $aktiboZenbakia = $row['AktbZenbakia'];
} else {
    // Si no se encuentra la máquina, establecer un valor predeterminado
    $marka = 'N/A';
    $modeloa = 'N/A';
    $kokapena = 'N/A';
    $CEmarka = 'N/A';
    $aktiboZenbakia = 'N/A';
    echo "No se encontraron resultados para el ID: $machineId";
    // Añadir algún otro manejo de errores si es necesario
}

// Cerrar la conexión
$conn->close();
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const machineNumber = "<?php echo $machineNumber; ?>";
        document.getElementById("T_Konponketa").innerText = machineNumber;
    });
</script>

<div class="osoa">
    <h1><?php echo strtoupper($machineId); ?></h1>
    <div class="osoa1">
        <table borde>
            <tr>
                <th>Makinaren izendapena</th>
                <td id="T_Konponketa"><?php echo $machineId; ?></td>
                </tr>
            <tr>
    <th>Marka</th>
    <td><?php echo $marka; ?></td>
</tr>
<tr>
    <th>Modeloa</th>
    <td><?php echo $modeloa; ?></td>
</tr>
            <tr>
                <th>Fabrikazio Urtea</th>
                <td></td>
            </tr>
            <tr>
                <th>Erosketa Urtea</th>
                <td></td>
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
        <div class="osoa2textua">
            <div class="puntoak">
                <ol>

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

// Realizar la consulta para obtener la información de los elementos de protección
$sql = "SELECT * FROM babes_elementuak";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los elementos de protección en la lista
    echo '<div class="osoa2">
            <h1>Babeserako Ekipoak</h1>
            <div class="osoa2textua">
                <div class="puntoak">
                    <ol>';
    
    // Iterar sobre los resultados y mostrar cada elemento en un <li>
    while($row = $result->fetch_assoc()) {
        echo '<li>' . $row['Izena'] . '</li>';
    }
    
    echo '          </ol>
                </div>
                <div class="argazkia">
                    <img src="../../../public/Argazkiak/señales.png" alt="">
                </div>
            </div>
        </div>';
} else {
    echo "No se encontraron elementos de protección.";
}

// Cerrar la conexión
$conn->close();
?>                </ol>
            </div>
        
        </div>
    </div>
    <div class="osoa3">
        <div class="puntua">
            <div class="elementua">
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

// Realizar la consulta para obtener la información de los riesgos
$sql = "SELECT deskribapena FROM arriskuak";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // Mostrar los riesgos en la lista
    echo '<div class="osoa3">
            <h1>Arriskuak</h1>
            <div class="puntua">
                <div class="elementua">
                    <ol>';
    
    // Iterar sobre los resultados y mostrar cada riesgo en un <li>
    while($row = $result->fetch_assoc()) {
        echo '<li>' . $row['deskribapena'] . '</li>';
    }
    
    echo '          </ol>
                </div>
            </div>
            <div class="argazkia">
                <img src="../../../public/Argazkiak/arriskua1.png" alt="">
            </div>
        </div>';
} else {
    echo "No se encontraron riesgos.";
}

// Cerrar la conexión
$conn->close();
?>            </div>
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
                    <li>Abiadura kaxa</li>
                    <li>Azinapen kaxa</li>
                    <li>Orgak</li>
                    <li>Kontraburua</li>
                    <li>Balazta</li>
                    <li>Kota bisuaizadore digitala</li>
                    <li>Platera</li>
                    <li>Babesa</li>
                </ol>
            </div>
            <div>
                <img src="../../../public/Argazkiak/atala.png" alt="">
            </div>
        </div>
    </div>
    <div class="osoa6">
        <h1>Makinaren detaileak</h1>
        <div>
            <ul>
                <li>Abiadura kaxa</li>
                <li>Azinapen kaxa</li>
                <li>Orgak</li>
                <li>Kontraburua</li>
            </ul>
        </div>
        <img src="../../../public/Argazkiak/makina.png" alt="">
    </div>
    <div class="osoa7">
        <h1>Erabilpena</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9_j7Lp-e3PY?si=RU7ZsE5P_fHi3Cc0"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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