<?php


function setSessionLanguageToDefault()
{
    $_SESSION["_LANGUAGE"] = "nl"; 
}


function changeSessionLanguage()
{
    if (isset($_POST["selectedLang"])) {
        $_SESSION["_LANGUAGE"] = $_POST["selectedLang"];
    }
}


function trans($indexPhrase)
{
  
    static $translationsArray = array();

   
    if (file_exists(APP_DIR . '/src/language/' . $_SESSION["_LANGUAGE"] . '.php')) {
        $url = APP_DIR . '/src/language/';
       
        $translationsArray = include($url . $_SESSION["_LANGUAGE"] . '.php');
    }

    
    return array_key_exists($indexPhrase, $translationsArray) ? $translationsArray[$indexPhrase] : $indexPhrase;
}
?>
