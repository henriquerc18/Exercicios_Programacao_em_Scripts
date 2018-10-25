<?php
    require_once '../controller/Conexao.class.php';
    require_once '../model/Crud.class.php';

    $con = new Conexao();
    $con->connect();

    @$getId = $_GET['id'];

    if ($getId) {//se existir algum id...
        $consulta = mysql_query("SELECT * FROM produto WHERE id = $getId");
        $campo = mysql_fetch_array($consulta); //pega os registros existentes no banco
    }
    if (isset($_POST['Cadastrar'])) {//se o usuario clicar em NOVO...
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $crud = new Crud('produto'); //instanciando um objeto do tipo CRUD
        $crud->inserir("nome,descricao", "'$nome','$descricao'");
        header("Location: ../index.php"); //comando para redirecionar para index.php
    }//fecha if

    if (isset($_POST['Editar'])) {//se o usuario clicar em Editar...
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $crud = new Crud('produto'); //instanciando um objeto do tipo CRUD
        $crud->atualizar("nome='$nome',descricao='$descricao'", "id=$getId");
        header("Location: ../index.php"); //comando para redirecionar para index.php
    }//fecha if
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Formulário de Cadastro de Produtos</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <!--Com o action vazio, o formulario carrega os 
        comandos nele mesmo -->
        <form action="" method="post">
            <label>Nome:</label>
            <!--Caso o formulario esteja no modo de edição,
            ele mostrará os valores a serem editados dentro
            dos inputs, que estarão preenchidos-->
            <input type="text" name="nome" 
                   value="<?php echo @$campo['nome'];?>"/>
            <br/><br/>
            <label>Descrição:</label>
            <input type="text" name="descricao" 
                   value="<?php echo @$campo['descricao'];?>"/>
            <br/><br/>
            <?php if(@!$campo['id']){//se existir ID...?>
                <input type="submit" name="Cadastrar" value="Cadastrar"/>
            <?php }else{ ?>
                <input type="submit" name="Editar" value="Editar"/>
            <?php } ?>
        </form>
    </body>
</html>
<?php $con->disconnect(); ?>