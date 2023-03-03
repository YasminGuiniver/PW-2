<?php
   //require_once "../../models/Conexao.php";
   // require_once "../../models/CategoriaModel.php";

   require_once "global.php";

   class CategoriaDao {
      public static function cadastrar ($categoria){
         $con = Conexao::conectar();
         $queryInsert = "INSERT INTO tbcategoria(nomecategoria)
                        VALUES (?)";
         $prepareStatement = $con->prepare($queryInsert);
         $prepareStatement->bindValue(1, $categoria->getName());
         $prepareStatement->execute();
         return 'Cadastro feito com sucesso';
      }

      public static function lista(){
         $con = Conexao::conectar();
         $listar = "SELECT * FROM tbcategoria";
         $prepareListar = $con->query($listar);
         $result = $prepareListar->fetchAll();
         return $result;
      }

      // public static function cadastrar ($categoria){
      //    $con = Conexao::conectar();
      //    $queryInsert = "INSERT INTO tbcategoria(nomecategoria)
      //                   VALUES (?)";
      //    $prepareStatement = $con->prepare($queryInsert);
      //    $prepareStatement->bind_param('s', $categoria->getName());
      //    $prepareStatement->execute();
      //    return 'Cadastro feito com sucesso';
      // }

      // public static function lista(){
      //    $con = Conexao::conectar();
      //    $listar = "SELECT * FROM tbcategoria";
      //    $prepareListar = $con->query($listar);
      //    $result = $prepareListar->fetch_all(MYSQLI_ASSOC);
      //    return $result;
      // }
   }
?>