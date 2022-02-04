<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/index.css">

</head>
<!------ Include the above in your HEAD tag ---------->

<div class="mainContainer">
  <div class="container">
    <div class="middle">

      <div id="login">

        <?php
          $registroOK = isset($_GET['registroOK']) ? $_GET['registroOK'] : false;

          if (isset($registroOK) && $registroOK == true) {
            echo '<p class="error"><strong>Registro completado correctamente</strong></p>';
          }
        ?>

        <form action="verificar-login.php" method="POST">

          <p><span class="fa fa-user"></span><input type="text" name="username" Placeholder="Username" required></p>
          <p><span class="fa fa-lock"></span><input type="password" name="password" Placeholder="Password" required></p>

          <?php
          $error = isset($_GET['error']) ? $_GET['error'] : false;

          if (isset($error) && $error == true) {
            echo '<p class="error"><strong>Tus credenciales son incorrectas o la cuenta no ha sido activada!!!</strong></p>';
          }
          ?>

          <div>
            <span style="width:25%; display: inline-block;"><a href="/register.php"><input type="button" value="Sign Up"></a></span>
            <span style="width:25%; display: inline-block; margin-left: 10%;"><input type="submit" value="Sign In"></span>
          </div>

          <!-- Button trigger modal -->
          <button style="margin-top: 15px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Forgot Password?</button>

          <div class="clearfix"></div>

        </form>

      </div>

    </div> <!-- end login -->

    <div class="logo">
        <img src="assets/img/logoGran.png">
      <div class="clearfix"></div>

  </div>

</div>



<!-- Modal -->
<form action="./resetPasswordSend.php" method="post">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Introduce tu correo electronico</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>

        <div class="modal-body">
          <input id="email" name="email" placeholder="Correo electronic" class="form-control" type="email">
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>

      </div>
    </div>
  </div>
</form>

</div>
