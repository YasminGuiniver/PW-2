<?php

class ProdutosModel{
    private $idProduto;
    private $nomeProduto;
    private $precoProduto;
    private $img;
    private $categoria;

    public function getid(){
        return $this->idProduto;
    }
    public function getNome(){
        return $this->nomeProduto;
    }
    public function getPreco(){
        return $this->precoProduto;
    }
    public function getImg(){
        return $this->img;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setId($idProduto){
        return $this->idProduto = $idProduto;
    }
    public function setNome($nomeProduto){
        return $this->nomeProduto = $nomeProduto;
    }
    public function setPreco($precoProduto){
        return $this->precoProduto = $precoProduto;
    }
    public function setImg($img){
        return $this->img = $img;
    }
    public function setCategoria($categoria){
        return $this->categoria = $categoria;
    }
}
?>