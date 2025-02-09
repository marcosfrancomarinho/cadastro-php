<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <title>Cadastra-se</title>
</head>

<body class="bg-light">
   <?php
   session_start();
   $success = $_SESSION['success'] ?? null;
   $error = $_SESSION['error'] ?? null;
   unset($_SESSION['success']);
   unset($_SESSION['error']);
   ?>
   <section class="container bg-white my-4 p-3 rounded-2">
      <h1>Cadastra-se e vem fazer parte da melhor.</h1>
      <form class="row g-2" action="./src/app.php" method="post">
         <div class="form-floating">
            <input placeholder="Nome" class="form-control" type="text" name="name" id="name">
            <label for="name">Nome</label>
         </div>
         <div class="form-floating">
            <input class="form-control" placeholder="Email" type="email" name="email" id="email">
            <label for="email">Email</label>
         </div>
         <div class="form-floating">
            <input class="form-control" placeholder="Senha" type="password" name="password" id="password">
            <label for="password">Senha</label>
         </div>
         <div class="btn-group-lg">
            <button class="btn btn-success" type="submit">Registrar</button>
            <button class="btn btn-danger mx-3 " type="reset">Limpar</button>
         </div>
      </form>
      <div class="my-3">
         <?php if (!$error && $success): ?>
            <div class="alert alert-success alert-dismissible">
               <button type="button" data-bs-dismiss="alert" class="btn-close"></button>
               <?= $success ?>
            </div>
         <?php elseif ($error): ?>
            <div class="alert alert-danger alert-dismissible">
               <button type="button" data-bs-dismiss="alert" class="btn-close"></button>
               <?= $error ?>
            </div>
         <?php endif ?>
      </div>
   </section>


</body>

</html>