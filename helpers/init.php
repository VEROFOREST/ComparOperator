<?php

try 
{
    //  $db = new PDO('mysql:127.0.0.1;dbname=c0ogComparOperator;charset=utf8','c0olivierG','olivier34');
     $db = new PDO('mysql:host=localhost;dbname=c0comparoperatorvf;charset=utf8','c0vforest','Hwg6kT2@');

     

    // $db = new PDO('mysql:host=localhost;dbname=ComparOperator;charset=utf8','root','', [
 
    //     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     PDO::ATTR_EMULATE_PREPARES => false,
    // ]);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

?>