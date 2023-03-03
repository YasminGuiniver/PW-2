<?php
   spl_autoload_register('carregarClasseDao');

   function carregarClasseDao ($nomeclasse){
    if (file_exists ('../../models/' .$nomeclasse. '.php')){
        require_once '../../models/' .$nomeclasse. '.php';
    }
    if (file_exists ($nomeclasse. '.php')){
        require_once $nomeclasse. '.php';
    }
   }
?>