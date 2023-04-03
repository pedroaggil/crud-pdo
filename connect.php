<?php

    try {
        // Connect database
        $username = "root";
        $pass = "usbw";
        $conn = new PDO("mysql:host=localhost;dbname=trevoso_das_trevas", $username, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "sucesso família";

    } catch (PDOException $e) {
        // Else connect database
        echo "Você falhou, sua máquina inútil e imbecil: ". $e->getMessage();

    }

?>