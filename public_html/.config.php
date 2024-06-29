<?php
    define( "HOST", "*" ); // localhost, some CMS use mysql or 127.0.0.1.
    define( "DB_NAME", "u501542722_pgc" );       
    define( "USER", "u501542722_pgcadmin" );            
    define( "PASS", "w3bbiePGC!" );            
    try {
        $CONNECTION = new PDO("mysql:host=".HOST.";dbname=".DB_NAME."", USER, PASS);
        $CONNECTION->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $mysqli = @new mysqli(
        "*",
        "u501542722_pgc",
        "u501542722_pgcadmin",
        "w3bbiePGC!"
        );
    } catch ( PDOException $Exception ){
        $exception_message  = $Exception->getMessage();
        $exception_code     = (int)$Exception->getCode();
        // echo "<code>";
            // echo $exception_code . " " . $exception_message ;
        // echo "</code>";
    }
?>