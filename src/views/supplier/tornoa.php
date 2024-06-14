<?php require_once ("../supplier/_parts/head.php") ?>
<div class="botoiak">
    <div class="botoiaTextua">
        <h1>Tornoa:</h1>
    </div>
    <?php for ($i = 1; $i <= 12; $i++): ?>
        <button onclick="redirectToInfo('T-<?php echo $i; ?>')">T-<?php echo $i; ?></button>
    <?php endfor; ?>
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