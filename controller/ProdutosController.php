<?php
    require_once "global.php";
    class ProdutoController {
        public $produtos;

        public function __construct($produtos){
            $this->produtos = $produtos;
        }
    }
?>