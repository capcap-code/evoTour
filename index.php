<?php
    ini_set ("display_errors", 1);

    ini_set ("display_startup_errors",1);
    error_reporting(E_ALL);

    session_start();
    define('LIBRARIES','./libraries/');
    define('SOURCES','./sources/');
    define('LAYOUT','layout/');
    define('THUMBS','thumbs');
    define('WATERMARK','watermark');
    define('TEMPLATE', 'template');

    /* Config */
    require_once LIBRARIES."config.php";
    require_once LIBRARIES.'autoload.php';
    require_once LIBRARIES."config-type.php";
    
    /* Router */
    require_once LIBRARIES."router.php";
 
    /* Template */
    include TEMPLATE."index.php";   
?>

