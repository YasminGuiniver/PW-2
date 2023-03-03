<?php
class CategoriaModel {
   private $idCategoria;
   private $nomeCategoria;
   
   public function getId(){
    return $this->idCategoria;
   }
   public function getName(){
    return $this->nomeCategoria;
   }
   public function setId($idcategoria){
        $this->idCategoria = $idcategoria;
   }
   public function setName($nomeCategoria){
     $this->nomeCategoria = $nomeCategoria;
   }
}
?>