<?php

require_once "model/Aluno.php";

    class AlunoController{

        public $aluno;

        public function __construct($aluno){
            $this->aluno = $aluno;
        }

        public function validarCpf(){
            //aqui vc insere o algoritmo de validação do CPF
            return true;
        }
    }