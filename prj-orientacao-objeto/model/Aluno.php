<?php
    require_once 'Turma.php';

    class Aluno{
        private $idaluno;
        private $nomealuno;
        private $cpfaluno;

        private $turma;

        public function __construct(){
            $this->turma = new Turma();
        }

        public function getId(){
            return $this->idaluno;
        }
        public function getNome(){
            return $this->nomealuno;
        }
        public function getCpf(){
            return $this->cpfaluno;
        }
        public function setId($idaluno){
            $this->idaluno = $idaluno;
        }
        public function setNome($nomealuno){
            $this->nomealuno = $nomealuno;
        }
        public function setCpf($cpfaluno){
            $this->cpfaluno = $cpfaluno;
        }

        public function getTurma(){
            return $this->turma;
        }
        public function setTurma($turma){
            $this->turma = $turma;
        }
    }