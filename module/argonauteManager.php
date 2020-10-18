<?php
    class ArgonauteManager extends Manager {

        function add(Argonaute $argonaute) {
            $db = $this->dbConnect();
            $query = $db->prepare
                (
                    "INSERT INTO argonaute(name)
                    VALUES (?)"
                );
            $query->bindValue(1,$argonaute->getName());
            $query->execute();

            $argonaute->hydrate(['id'=> $db->lastInsertId()]);
        }  

        public function getArgonautes() 
        {
            $db = $this->dbConnect();
            $argonautes = [];
            $query = $db->query
                (
                    "SELECT id, name
                    FROM argonaute"
                );

            
            while ($donnees = $query->fetch(PDO::FETCH_ASSOC))
            {
                $argonautes[]= new Argonaute($donnees);
            }

            return $argonautes; 
        }
    }