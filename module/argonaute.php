<?php
    class Argonaute {
        private $id;
        private $name;
    
        public function __construct(array $data)
        {
            $this->hydrate($data);
        } 

        public function hydrate($data)
        {
            foreach ($data as $key => $value)
            {
                $method = 'set'. ucfirst($key);

                if (method_exists($this,$method))
                {
                    $this->$method($value);
                }
            }
        }

        public function getId() 
        {
            return $this->id;
        }

        public function setId($id) 
        {
            $this->id= $id; 
        }

        public function getName() 
        {
            return $this->name;
        }

        public function setName($name) 
        {
            $this->name = htmlspecialchars($name);
        }
    }   
?>
