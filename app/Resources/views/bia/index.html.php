<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
<form action="<?php echo $view['router']->path('home_page') ?>" method="POST">
	<label>Nome</label>
	<input type="text" name="nome">
	<label>Senha</label>
	<input type="password" name="senha">
	<input type="submit" name="enviar">
</form>
</body>
</html>