<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
  <?php include 'navbar.php'; ?>
  <div class="container mt-4">
    <?php include('mensagem.php'); ?> <!--MENSAGEM DE ALERTA INFORMANDO STATUS DA ACÃO -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Lista de Usuarios
              <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar usuario</a>
            </h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Nome </th>
                  <th> E-mail </th>
                  <th> Data Nascimento</th>
                  <th> Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = 'SELECT * FROM usuarios';
                $usuarios = mysqli_query($conexao, $sql);
                //print_r($usuarios); exit; //-TESTE DE RETORNO DA DATBASE
                if (mysqli_num_rows($usuarios) > 0) {
                  foreach ($usuarios as $usuario) {
                    ?>
                    <tr>
                      <td><?= $usuario['id'] ?></td>
                      <td><?= $usuario['nome'] ?></td>
                      <td><?= $usuario['email'] ?></td>
                      <td><?= date('d/m/Y', strtotime($usuario['data_nascimento'])) ?></td>
                      <!--TRATAMENTO MASK PRO CAMPO DATE-->
                      <td>

                        <a href="usuario-view.php?id=<?= $usuario['id'] ?>" class="btn btn-secondary btn-sm">
                          <span class="bi-eye-fill"></span>&nbsp; Visualizar </a>

                        <a href="usuario-edit.php?id=<?= $usuario['id'] ?>" class="btn btn-success btn-sm">
                          <span class="bi-pencil-fill"></span>&nbsp;Editar</a>

                        <form action="acoes.php" method="POST" class="d-inline">
                          <button onclick="return confirm('Tem certeza que deseja excluir?')" type="submit"
                            name="delete_usuario" value="<?= $usuario['id'] ?>" class="btn btn-danger btn-sm">
                            <span class="bi-trash3-fill"></span>Excluir
                          </button>
                        </form>
                      </td>
                    </tr>
                    <?php
                  }
                } else {
                  echo '<h5>Nenhum usuário encontrado!</h5>';
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>