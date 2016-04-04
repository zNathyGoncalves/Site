<?php
ini_set('display_errors',0);
error_reporting(0);
?>

<head>
<meta charset="UTF-8">
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="css" href="css/style.css"/>
<title>Login </title>

</head>

<body>
	<div id="login" class="bradius">
	<div class="message"></div>
	<div class="logo"><a href="<?php echo $home;?>"title="<?php echo $title;?>"<img src="css/imagens/NewLogo.jpg" alt="<?php echo $title;?>"title="<?php echo $title;?>"width="250" height="50"/></a></div>
	<div class="acomodar"</div>
		<form action=""method="post">
		<label for="usuario">Usuário:</label><input id="usuario" type="text" class="txt bradius" name="usuario" value=""/>
		<label for="senha">Senha:</label><input id="senha" type="password" class="txt bradius" name="senha" value=""/> 
		<input type="submit" class="sb bradius" value="Login"/>
	<!--acomodar-->
	<div>
	<!--login-->

</body>
</html>
