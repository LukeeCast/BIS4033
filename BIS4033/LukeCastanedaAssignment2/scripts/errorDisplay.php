<?php
function echoError ($errMsg, $jsFile, $cssFile) {
  require_once('../app_config.php');
  require_once('echoHTML.php');
  echoHead($jsFile, $cssFile);
  echoHeader("Error");  
  echo "<h3>$errMsg</h3>";
  echoFooter();
}
?>