
   
<?php
    try {  // pour retourner les erreurs

        $bd = new PDO('mysql:host=localhost; dbname=asso_support; charset=utf8', 'root','');

    } catch (exception $e) {
        
        die($e->getMessage());

    }
?>