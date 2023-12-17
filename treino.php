<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="css/treino.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- =============== Topo =================== -->
<div id="topo">
	<div id="menu">
		<ul>
			<a href="#"><li>Home</li></a>
			<a href="#"><li>Fotos</li></a>
			<a href="#"><li>Acesso</li></a>
			<a href="#"><li>Contato</li></a>
		</ul>
	</div>
</div>

<!-- =============== Banner =================== -->
<div id="banner">
	<img src="img/bg.jpg" style="width: 600px; height: 50px;">
</div>

<!-- =============== Conteudo =================== -->
<h1>Relatório Científico:</h1>
	<h2>Primeiro teste:</h2>
		<p>Neste exercício, vou treinar a criação de blocos CSS.</p>
		<div id="texto1" class="bloco">Neste bloco, usa-se 'id'. Que pelo que foi falado, deve ser único. <br> Vamos ver!
		</div>
		<div id="texto2" class="bloco">Ao contrário do que foi falado, coloquei duas Div's utilizando a mesma 'id'!. <br> Vamos ver!
		</div>


		<form class="formulario" action="mostra.php" method="post">
			<table width="290" border="2" summary="Quando pretende chegar?">
			  <tbody>
				<tr>
				  <td scope="row">Nome:</td>
				  <td><input type="text" name="nome" required /></td>
				</tr>
				<tr>
				  <td scope="row">E-mail:</td>
				  <td><input type="email" name="email" value="" required /></td>
				</tr>
				<tr>
				  <td scope="row">Data de chegada:</td>
				  <td><input type="date" name="datachegada" value="" /></td>
				</tr>
				<tr>
				  <td scope="row">Data de saída:</td>
				  <td><input type="date" name="datasaida" value="" /></td>
				</tr>

				<tr>
				  <td scope="row">&nbsp;</td>
				  <td><input type="submit" value="Enviar" /></td>
				  <td>&nbsp;</td>
				</tr>
			  </tbody>
			</table>

	  </form>
</body>
</html>