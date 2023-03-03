<?php

    require_once 'model/Conexao.php';
    require_once 'model/Aluno.php';

    class AlunoDao{

        public static function cadastrar($aluno){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbaluno(nomealuno, cpfaluno, idturma)
                            VALUES (?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);

            $prepareStatement->bindValue(1, $aluno->getNome());
            $prepareStatement->bindValue(2, $aluno->getCpf());
            $prepareStatement->bindValue(3, $aluno->getTurma()->getId());

            $prepareStatement->execute();

            return 'Cadastro realizado com sucesso';
        }
    }
?> 