<?php 
    //require_once "../../models/Conexao.php";
    // require_once "../../models/AdministradorModel.php";
    require_once 'global.php';
    class AdministradorDao{


    public static function totalVendas(){
        $conexao = Conexao::conectar();
        $totalizarVendas = "SELECT COUNT(idvenda) as Vendas FROM tbvenda";
        $prepareTotalizar = $conexao->query($totalizarVendas);
        $result = $prepareTotalizar->fetchAll();
        return $result;
    }

    public static function totalValor(){
        $conexao = Conexao::conectar();
        $totalizarValor = "SELECT SUM(valortotalvenda) as totalValor FROM tbvenda";
        $prepareValor = $conexao->query($totalizarValor);
        $result = $prepareValor->fetchAll();
        return $result;
    }

    public static function vendasPendentes(){
        $conexao = Conexao::conectar();
        $totalizarPendentes = "SELECT COUNT(idvenda) as pendentes FROM tbvenda WHERE statusvenda LIKE 1";
        $preparePendentes = $conexao->query($totalizarPendentes);
        $result = $preparePendentes->fetchAll();
        return $result;
    }    
    
    public static function totalClientes(){
        $conexao = Conexao::conectar();
        $totalizarClientes = "SELECT COUNT(idcliente) as clientes FROM tbvenda";
        $prepareClientes = $conexao->query($totalizarClientes);
        $result = $prepareClientes->fetchAll();
        return $result;
    }    

    public static function clientesMais(){
        $conexao = Conexao::conectar();
         for($i=0; $i < 1; $i++){
         $totalizarClientesMais = //"SELECT tbvenda.idcliente as cliente, emailcliente as email FROM tbvenda INNER JOIN tbcliente ON tbvenda.idcliente = tbcliente.idcliente";
         "select max(idcliente) as vendas, idcliente
         from tbvenda 
         group by idcliente 
         order by vendas desc";
        }
        $prepareClientesMais = $conexao->query($totalizarClientesMais);
        $result = $prepareClientesMais->fetchAll();
        return $result;
    }    

    }
?>