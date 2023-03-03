<?php
    class Conexao
    {
        public static function conectar(){
            // $conexao = new PDO("TIPO_BANCO:host=SERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA"); 
            $conexao = new PDO("mysql:host=localhost;dbname=bdloja", "root", ""); 
            
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexao;
        }

        // public static function conectar(){
        //     //CONCÇÃO COM O BANCO
        //     $mysqli = new mysqli('mysqlphpLoja', "root", "Calanguinho2000", "bdloja");
        //     //VERIFICAÇÃO SE A CONECÇÃO FOI
        //     if ($mysqli->connect_error) {
        //         exit("Falha ao conectar com o mysql: (" . $mysqli->connect_error . ") " . $mysqli->connect_error);
        //     }
        //     return $mysqli;
        // }
    }
?>