<?php

    class ClienteModel{

        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $emailCliente;
        private $senhaCliente;
        private $logradouroCliente;
        private $numLogoCliente;
        private $compCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $ufCliente;
        private $cepCliente;

        public function getId(){
            return $this->idCliente;
        }
        public function getNome(){
            return $this->nomeCliente;
        }
        public function getCpf(){
            return $this->cpfCliente;
        }
        public function getEmail(){
            return $this->emailCliente;
        }
        public function getSenha(){
            return $this->senhaCliente;
        }
        public function getLogradouro(){
            return $this->logradouroCliente;
        }
        public function getNumLog(){
            return $this->numLogoCliente;
        }
        public function getcompCli(){
            return $this->compCliente;
        }
        public function getBairro(){
            return $this->bairroCliente;
        }
        public function getCidade(){
            return $this->cidadeCliente;
        }
        public function getUf(){
            return $this->ufCliente;
        }
        public function getCep(){
            return $this->cepCliente;
        }

        public function setId($idCliente){
            return $this->idCliente = $idCliente;
        }

        public function setNome($nomeCliente){
            return $this->nomeCliente = $nomeCliente;
        }

        public function setCpf($cpfCliente){
           return $this->cpfCliente = $cpfCliente;
        }
        public function setEmail($emailCliente){
            return $this->emailCliente = $emailCliente;
        }
        public function setSenha($senhaCliente){
            return $this->senhaCliente = $senhaCliente;
        }

        public function setLogradouro($logradouroCliente){
            return $this->logradouroCliente = $logradouroCliente;
        }

        public function setNumLog($numLogoCliente){
            return $this->numLogoCliente = $numLogoCliente;
        }
        public function setCompCliente ($compCliente){
            return $this->compCliente = $compCliente;
        }
        public function setBairro ($bairroCliente){
            return $this->bairroCliente = $bairroCliente;
        }
        public function setCidade ($cidadeCliente){
            return $this->cidadeCliente = $cidadeCliente;
        }
        public function setUf($ufCliente){
            return $this->ufCliente = $ufCliente;
        }
        public function setCep ($cepCliente){
            return $this->cepCliente = $cepCliente;
        }
    }
?>