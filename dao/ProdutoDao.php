<?php

    // require_once '../../models/Conexao.php';
    // require_once '../../models/ProdutosModel.php';

    require_once "global.php";

    class ProdutoDao{
        public static function cadastro ($produto) {
            $conn = Conexao::conectar();

            $insert = "INSERT INTO tbProduto(nomeproduto , precoproduto , idcategoria)
            VALUES (? , ? , ?)";

            $prepare = $conn->prepare($insert);
            $prepare->bindValue(1, $produto->getNome());
            $prepare->bindValue(2, $produto->getPreco());
            $prepare->bindValue(3, $produto->getCategoria()->getId());

            $prepare->execute();
            return "Cadastro efetuado com sucesso!";
        }

        public static function listarId($produto){
            $conn = Conexao::conectar();

            $listarId = "SELECT idproduto FROM tbproduto WHERE nomeproduto LIKE '".$produto->getNome()."'";
            $result = $conn->query($listarId);
            $list = $result->fetchAll();
            foreach($list as $produto)
                $id = $produto['idproduto'];
            return $id;
        }
        public static function listar(){
            $conn = Conexao::conectar();

            $listar = "SELECT * FROM tbproduto";
            $resultado = $conn->query($listar);
            $select = $resultado->fetchAll();
            return $select;
        }

        public static function atualizaFoto($produto){
            $conn = Conexao::conectar();

            $query = "UPDATE tbproduto
                    SET imagemproduto  = ?
                    WHERE idproduto = ?";
            $prepare = $conn->prepare($query);

            $prepare->bindValue(1, $produto->getImg());
            $prepare->bindValue(2, $produto->getid());

            $prepare->execute();

            return 'Atualizou';
        }

        public static function consultarDados($produto){
            $conn = Conexao::conectar();

            $query = "SELECT nomeproduto,precoproduto,imagemproduto FROM tbproduto WHERE idproduto =".$produto->getId();
            $resultado = $conn->query($query);
            $list = $resultado->fetchAll();

            foreach($list as $p){
                $produto->setNome($p['nomeproduto']);
                $produto->setPreco($p['precoproduto']);
                $produto->setImg($p['imagemproduto']);
            }
            return $produto;
        }

        public static function contar(){
            $conn = Conexao::conectar();

            $query = "SELECT COUNT(idproduto) AS qtde FROM tbproduto";

            $result = $conn->query($query);
            $num = $result->fetchAll();
            foreach($num as $n)
                return $n['qtde'];
        }
    }
?>