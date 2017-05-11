<?php
  namespace KuntaAPI\Extensions\Mantyharju\Elokuvat;
  
  defined ( 'ABSPATH' ) || die ( 'No script kiddies please!' );
  
  add_action('kunta_api_register_templates', function () {
    global $kuntaApiTemplateFolders;
    $kuntaApiTemplateFolders[] = __DIR__ . '/templates';
  });
  
  
?>