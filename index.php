<?php

    require('controller/controller.php');
    try {
        if (isset($_GET["action"])) {
            if ($_GET["action"] == "add"  && isset($_POST["name"])) {
                addArgonaute($_POST);
            }
        }
        $argonautes = showList();
        include "view/argonaute.php";
        
    }
    catch(Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
  