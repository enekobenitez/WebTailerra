<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f605dc8fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="stylesheet" href="../../css/besteak.css">
    <link rel="stylesheet" href="../../css/informazioa.css">

    <title>Tailerra</title>

    <?php
    
    session_start();

    define('APP_DIR', $_SERVER['DOCUMENT_ROOT'] . '/WebTailerra'); 
    define('HREF_VIEWS_DIR', '/WebTailerra/src/views/'); 
    require_once(APP_DIR . "/src/translations/translations.php"); 
    
    if (!isset($_SESSION['_LANGUAGE'])) {
        setSessionLanguageToDefault();
    }

    
    changeSessionLanguage();
    ?>
</head>
<body>
<div class="header">
    <div class="gorakoa">
        <a href="../mainPage/index.php"><img src="../../../public/Argazkiak/goierri_logo.jpg" alt=""></a>
        <div class="sareSozialak">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-youtube"></i>
        </div>
    </div>
    <div class="berakoa">
        <form method="post">
            <div class="opcion_idioma_borde">
                <select class="opcion_idioma" name="selectedLang">
                    <option class="opcion_idioma" value="nl" <?php if ($_SESSION['_LANGUAGE'] === 'nl') echo 'selected'; ?>>EUS</option>
                    <option class="opcion_idioma" value="es" <?php if ($_SESSION['_LANGUAGE'] === 'es') echo 'selected'; ?>>ESP</option>
                    <option class="opcion_idioma" value="en" <?php if ($_SESSION['_LANGUAGE'] === 'en') echo 'selected'; ?>>ENG</option>
                </select>
                <button class="aldatu_hizkuntza_botoia"><?= trans("Aldatu") ?></button>
            </div>
        </form>
    </div>
</div>
