<?php
    function loadClass($class)
    {
        require './module/'. $class . '.php';
    }

    spl_autoload_register('loadClass');

    function addArgonaute(Array $data) 
    {
        $argonaute = new Argonaute($data);
        $manager = new ArgonauteManager;
        $affectedLines = $manager->add($argonaute);
    
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le propietaire !');
        } else {
            header('Location: index.php');
        }
    }

    function showList() 
    {
        $manager = new ArgonauteManager;
        return $manager->getArgonautes();
    }