<?php
   spl_autoload_register('carregarClasseModel');

   function carregarClasseModel ($nomeclasse){
    if (file_exists ($nomeclasse. '.php')){
        require_once $nomeclasse. '.php';
    }
   }
?>