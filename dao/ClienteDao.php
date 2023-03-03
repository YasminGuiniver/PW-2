<?php

    // require_once '../models/ClienteModel.php';
    // require_once '../models/Conexao.php';

    require_once 'global.php';

    class ClienteDao{
        public static function cadastra($cliente){
            $conexao = Conexao::conectar();

            $queryInert = "INSERT INTO tbcliente (nomecliente , cpfcliente, emailcliente, senhacliente, logradourocliente, numlogcliente,
            compcliente, bairrocliente, cidadecliente, ufcliente, cepcliente)
            VALUES (?,?,?,?,?,?,?,?,?,?,?)";

            $prepare = $conexao->prepare($queryInert);

            $prepare->bindValue(1, $cliente->getNome());
            $prepare->bindValue(2, $cliente->getCpf());
            $prepare->bindValue(3, $cliente->getEmail());
            $prepare->bindValue(4, $cliente->getSenha());
            $prepare->bindValue(5, $cliente->getLogradouro());
            $prepare->bindValue(6, $cliente->getNumLog());
            $prepare->bindValue(7, $cliente->getcompCli());
            $prepare->bindValue(8, $cliente->getBairro());
            $prepare->bindValue(9, $cliente->getCidade());
            $prepare->bindValue(10, $cliente->getUf());
            $prepare->bindValue(11, $cliente->getCep());

            $prepare->execute();
            return 'Cadastrou';
        }

        public static function consultarLogin($cliente){
            $conexao = Conexao::conectar();

            $query = "SELECT idcliente, nomecliente, emailcliente, senhacliente FROM
            tbcliente WHERE emailcliente LIKE '".$cliente->getEmail()."'AND senhacliente LIKE '".$cliente->getSenha()."'";
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            $n = count($lista);
            if($n == 1)
                return $lista;
            else
                return 0;
        }

        public static function lista(){
            $conexao = Conexao::conectar();
            $listar = "SELECT * FROM tbcliente";
            $prepareListar = $conexao->query($listar);
            $result = $prepareListar->fetchAll();
            return $result;
        }
    }
?>