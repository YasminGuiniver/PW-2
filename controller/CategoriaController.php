<?php

    require_once "global.php";

    class CategoriaController {
        public $categoria;

        public function __construct($categoria){
            $this->categoria = $categoria;
        }
    }

?>