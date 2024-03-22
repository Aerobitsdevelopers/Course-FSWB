<?php
    define('BASE_PATH','http://localhost/webinar/');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'webinar');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    
    date_default_timezone_set("Asia/Kolkata");
    $mysqli=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
?>