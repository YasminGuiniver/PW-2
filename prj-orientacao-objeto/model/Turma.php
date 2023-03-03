<?php

    class Turma{
        private $idturma;
        private $nometurma;

        public function getId(){
            return $this->idturma;
        }
        public function getNome(){
            return $this->nometurma;
        }
        public function setId($idturma){
            $this->idturma = $idturma;
        }
        public function setNome($nometurma){
            $this->nometurma = $nometurma;
        }
    }