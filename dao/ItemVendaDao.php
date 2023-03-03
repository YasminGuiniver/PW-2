<?php
    require_once "global.php";

    class ItemVendaDao{
        public static function cadastro($item, $idvenda){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbitemvenda(idvenda, idproduto, quantidadeitemvenda, subtotalitemvenda)
                             VALUES(?,?,?,?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $idvenda);
            $prepareStatement->bindValue(2, $item->getProduto()->getid());
            $prepareStatement->bindValue(3, $item->getQtde());
            $prepareStatement->bindValue(4, $item->getSubTotal());

            $prepareStatement->execute();
            return 'Cadastrou';
        }
        public static function listar(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idvenda, idproduto, quantidadeitemvenda, subtotalitemvenda FROM tbitemvenda";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;   
        }
        public static function contarProdutoVenda(){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idproduto, COUNT(iditemvenda) AS qtde FROM tbitemvenda GROUP BY idproduto ORDER BY qtde DESC";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $cliente)
                return $cliente['idproduto'];   
        }
    }
?>