<?php
session_start();
require 'conexao.php';

if (isset($_POST['create_usuario'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    //USADO password_hash p/ encriptar no banco de dados a senha VARCHAR-255
    $senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';

    $sql = "INSERT INTO usuarios (nome, email, data_nascimento, senha) VALUES ('$nome', '$email', '$data_nascimento', '$senha')";



    mysqli_query($conexao, $sql);

    //MENSAGEM DE RETORNO DA CRIAÇÃO DO USUARIO

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuario criado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        //ERRO AO TENTAR SALVAR EM BRANCO (BRANCO)
        $_SESSION['mensagem'] = 'Usuário não foi criado';
        header('Location: index.php');
        exit;
    }
}

if (isset($_POST['update_usuario'])) {

    $usuario_id = mysqli_real_escape_string($conexao, $_POST['usuario_id']);

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $data_nascimento = mysqli_real_escape_string($conexao, trim($_POST['data_nascimento']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    $sql = "UPDATE usuarios SET nome= '$nome', email = '$email', data_nascimento = '$data_nascimento'";

    if (!empty($senha)) {
        $sql .= ", senha='" . password_hash($senha, PASSWORD_DEFAULT) . "'"; //.= (ponto igual) para a concatenar no PHP
    }
    $sql .= " WHERE id = '$usuario_id'";

    mysqli_query($conexao, $sql);

    //MENSAGEM DE RETORNO DA ATUALIZAÇÃO DO USUARIO

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Usuario atualizado com sucesso';
        header('Location: index.php');
        exit;
    } else {

        //ERRO AO TENTAR ATUALIZAR NO BRANCO DE DADOS

        $_SESSION['mensagem'] = 'Usuário não foi atualizado';
        header('Location: index.php');
        exit;
    }
}

if (isset($_POST['delete_usuario'])) {
    $usuario_id = mysqli_real_escape_string($conexao, $_POST['delete_usuario']);

    $sql = "DELETE FROM usuarios WHERE id = '$usuario_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['message'] = 'Usuário deletado com sucesso';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Usuário não foi deletado';
        header('Location:index.php');
        exit;
    }
}
?>