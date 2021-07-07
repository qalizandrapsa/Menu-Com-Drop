<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Menu com DROP EX04 </title>
	<style type="text/css">
	    body{
		background-image: url('imagem/DPunk.jpg');
		font-family: arial ; 
		background-size: cover;
	    }
	    ul{
		margin: 0;
		padding: 0;
		list-style: none;
		color: white;
	    }
	    ul li{
		float: left;
		width: 200px;
		height: 40px;
		background-color: black;
		opacity: .8;
		line-height: 40px;
		text-align: center;
		font-size: 20px;
	    }
	    ul li a{
		text-decoration: none;
		color: white;
		display: block;
	    }
	    ul li a:hover{
		background-color: green;
	    }
	    ul li ul li{
		display: none;
		max-height: 200px;
		-webkit-transition: all 0.9s ease-out;
	    }
	    ul li:hover ul li{
		display: block;
		
	    }
	</style>
    </head>
    <body>
	<div class="menu">
	    <ul class="menuprincipal">
		<li><a href="#">Esporte</a>
		    <ul class="submenu">
			<li><a href="#">Página Principal</a></li>
			<li><a href="#">Futebol</a></li>
			<li><a href="#">Libertadores</a></li>
			<li><a href="#">Brasileirão</a></li>
			<li><a href="#">Copa do Brasil</a></li>
			<li><a href="#">Copa do Mundo 2014</a></li>
			<li><a href="#">Blog do Juca Kfouri</a></li>
			<li><a href="#">MMA</a></li>
			<li><a href="#">Fórmula 1</a></li>
			<li><a href="#">Vôlei</a></li>
		    </ul>
		</li>
		<li><a href="#">Entretê</a></li>
		<li><a href="#">Jogos</a></li>
	    </ul>
	</div>
    </body>
</html>
