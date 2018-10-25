<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <?php
            require_once './controller/Conexao.class.php';
            require_once './model/Crud.class.php';
            
            /*Criar um objeto do tipo conexao*/
            $con = new Conexao();
            
            /*fazer a chamada da function que conecta ao banco*/
            $con->connect();  
            
            /*Testar a conexao*/
            if($con->connect()){
                echo "Conectou!";
            }else{
                echo "Não conectou!";
            }
        ?>
        <a href="view/formulario.php">Novo</a>
        <table style="border:1px solid red;">
            <thead>
                <tr>
                    <th colspan="4">CADASTRO DE PRODUTOS</th>
                </tr>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    /*Query para listar os dados registrados na tabela produto*/
                    $consulta = mysql_query("SELECT * FROM produto");
                    while($campo = mysql_fetch_array($consulta)){ ?>
                        <tr>
                            <td><?php echo $campo['nome']; ?></td>
                            <td><?php echo $campo['descricao'];?></td>
                            <td><a href="view/formulario.php?id=
                                <?php echo $campo['id'];?>">Editar</a></td>
                            <td><a href="controller/excluir.php?id=
                                <?php echo $campo['id'];?>">Excluir</a></td>
                        </tr>
                    <?php } ?>
            </tbody>
        </table>
    </body>
</html>
<?php $con->disconnect(); ?>