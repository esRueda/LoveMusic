<?php session_start(); ?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>LoveMusic Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="../css/login.css">


</head>

<body>



<form action="../funcionalidad/procesarLogin.php">
  <div class="cont" action="../funcionalidad/procesarLogin.php">
    <div class="demo">
      <div class="login">
        <div class="login__check"></div>
        <div class="login__form">
          <div class="login__row">
            <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
            </svg>
            <input type="text" class="login__input name" placeholder="Username" name="correo" required>
          </div>
          <div class="login__row">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
              <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
            </svg>
            <input type="password" class="login__input pass" placeholder="Password" name="contrasena" required>
          </div>
          <button type="submit" class="login__submit">Sign in</button>
          <p class="login__signup">Don't have an account? &nbsp;<a type="button" href="registro.php">Sign up</a></p>
        </div>
      </div>
      <div class="app">
        <div class="app__top">
          <div class="app__menu-btn">
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>
</html>
