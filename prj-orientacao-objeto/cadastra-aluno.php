<?php
    require_once "model/Aluno.php";
    require_once "controller/AlunoController.php";
    require_once 'model/Turma.php';

    require_once 'dao/AlunoDao.php';
    

    $aluno = new Aluno();

    $aluno->setNome($_POST['txtnome']);
    $aluno->setCpf($_POST['txtcpf']);

    $turma = new Turma();
    $turma->setId($_POST['slturma']);
    
    $aluno->setTurma($turma);

    $alunoController = new AlunoController($aluno);

    //VC TERÁ IM IF/ELSE
    $alunoController->validarCpf($aluno);

    echo(AlunoDao::cadastrar($aluno));

    echo("<br> Aluno ".$aluno->getNome()." matriculado com sucesso.");
    
?>