<?php

    require_once 'global.php';

    class IntemVendaModel{
        private $id;
        private $qtde;
        private $subtotal;
        private $produto;

        public function __construct()
        {
            $this->produto = new ProdutosModel();
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setQtde($qtde){
            $this->qtde = $qtde;
        }
        public function setSubTotal($subtotal){
            $this->subtotal = $subtotal;
        }
        public function setProduto($produto){
            $this->produto = $produto;
        }
        public function getId(){
            return $this->id;
        }
        public function getQtde(){
            return $this->qtde;
        }
        public function getSubTotal(){
            return $this->subtotal;
        }
        public function getProduto(){
            return $this->produto;
        }
    }
?>