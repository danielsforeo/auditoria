<html>
<head>
	<title>Loggin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/estilo1.css">
  <meta name="description" content="">
      <meta name="author" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script type="text/javascript" src="js/code.js"></script>
</head>
<body>
	<div class="container">

      <div class="form-signin" role="form">
        <h2 class="form-signin-heading">Ingresa tus datos</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="usuario" class="form-control" placeholder="Usuario" required autofocus >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
        <button class="btn btn-lg btn-primary btn-block" type="button" id="btn_validar">Ingresar</button>
      </div>
      <div class="container" id="resultado"></div>
    </div> <!-- /container -->
</body>
</html>