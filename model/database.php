<?php
    //local development server connection
   //$dsn = 'mysql:host=localhost;dbname=zippyusedautos';
   // $username = 'root';
    //$password = 'passowrd';

    // Heroku connection
    
    $dsn = 'mysql:host=u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=fhh2mtds55apjahi';
    $username = 'm2vonlmxsg2mgfij';
    $password = 'vto8z0jpjodf2liz'; 
    
    try {
        //local development server connection
        //if using a $password, add it as 3rd parameter
        //$db = new PDO($dsn, $username);

        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>
