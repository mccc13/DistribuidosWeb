<?php

  session_start();

  require_once('vendor/autoload.php');
  require_once('App/Auth/Auth.php');

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="assets/css/font-awesome.css">
     <link rel="stylesheet" href="assets/css/bootstrap-social.css">
     <script src="assets/js/jquery.js" charset="utf-8"></script>
   </head>
   <body>

     <div class="container">
       <div class="row">
        <?php if (Auth::isLogin()): ?>
          <h2>Hola <?php echo $_SESSION['user']['name'] ?></h2>
          <a href="logout.php">Cerrar Sesion</a>
        <?php else: ?>
          <?php
            Auth::getUserAuth();
           ?>
          <div class="col-md-4">
            <a href="?login=Facebook" class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span> Inicia sesion con Facebook</a>
            <a href="?login=Google" class="btn btn-block btn-social btn-google"><span class="fa fa-google"></span> Inicia sesion con Google</a>
        
          </div>
        <?php endif; ?>

       </div>
     </div>

   </body>
 </html>
