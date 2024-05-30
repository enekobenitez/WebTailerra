<form method="post">
  <div class="opcion_idioma_borde">
    <select class="opcion_idioma" name="selectedLang">
      <option class="opcion_idioma" value="nl" <?php



     
      if (isset($_POST['selectedLang']) && $_POST['selectedLang'] === 'eus') {
        echo 'selected';
      } elseif (!isset($_POST['selectedLang']) && isset($_SESSION['_LANGUAGE']) && $_SESSION['_LANGUAGE'] === 'eus') {
        
        echo 'selected';
      }



      ?>>EUS</option>
      <option class="opcion_idioma" value="es" <?php

      
      if (isset($_POST['selectedLang']) && $_POST['selectedLang'] === 'es') {
        echo 'selected';
      } elseif (!isset($_POST['selectedLang']) && isset($_SESSION['_LANGUAGE']) && $_SESSION['_LANGUAGE'] === 'es') {
       
        echo 'selected';
      }



      ?>>ESP</option>
      <option class="opcion__LANGUAGE" value="en" <?php



    
      if (isset($_POST['selectedLang']) && $_POST['selectedLang'] === 'en') {
        echo 'selected';
      } elseif (!isset($_POST['selectedLang']) && isset($_SESSION['_LANGUAGE']) && $_SESSION['_LANGUAGE'] === 'en') {
        
        echo 'selected';
      }



      ?>>ENG</option>
    </select>
    <button class="aldatu_hizkuntza_botoia"><?= trans("Aldatu") ?> </button>
  </div>
</form>