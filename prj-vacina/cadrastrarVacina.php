<?php
    $nome = $_POST['txtNome'];
    $escola = $_POST ['slEscola'] ;
    $dose = $_POST['rdDose'];

        switch ($escola) {
            case 1 :
                $escola = "Etec de Guaianazes" ;
                break;
            case 2 : 
                $escola = "Prof° Maria Lucia Ambrozio";
                break ;
            case 3 :
                $escola = "Prof° Cesár Dacorso Filho";
                break ;
            case 4 :
                $escola = "Dom Pedro 1";
                break ;               
            }

            


         if ($escola == 2 ) {
            echo ("O professor (a) " .$nome. " cadrastrou sua " .$dose.  " dose com sucesso ") ;
            echo ("O  professor (a) trabalha na escola Prof° Maria Lucia Ambrozio") ;   

         }          
?>
