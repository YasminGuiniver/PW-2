<?php
   spl_autoload_register('carregarClasseController');

   function carregarClasseController ($nomeclasse){
    if (file_exists ('../models/' .$nomeclasse. '.php')){
        require_once '../models/' .$nomeclasse. '.php';
    }
   }
?>