<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Menu com DROP </title>
        <style type="text/css">
            body{
		font-family: arial;
	    }
	    .menu{
		width: 200px;
		border: 1px solid red;
	    }
	    .menuprincipal, .submenu{
		margin: 0;
		padding: 0;
		list-style: none;
	    }
	    .menuprincipal a{
		display: block;
		background-color: #ccc;
		text-decoration: none;
		padding: 10px;
		color: #000;
	    }
	    .menuprincipal a:hover{
		background-color: #c5c5c5;
	    }
	    .submenu{
		overflow: hidden;
		max-height: 0;
		-webkit-transition: all 0.9s ease-out;
	    }
	    .submenu a{
		background-color: #999;
	    }
	    .submenu a:hover{
		background-color: #666;
	    }
	    .menuprincipal li:hover .submenu{
		display: block;
		max-height: 200px;
		-webkit-transition: all 0.9s ease-out;
	    }
        </style>
    </head>
    <body>
	<div class="menu">
	    <ul class="menuprincipal">
		<li><a href="#">Home</a></li>
		<li><a href="#">Sobre</a></li>
		<li><a href="#">Funcionários</a>
		    <ul class="submenu">
			<li><a href="#">Cadastrar</a></li>
			<li><a href="#">Alterar</a></li>
			<li><a href="#">Pesquisar</a></li>
			<li><a href="#">Excluir</a></li>
		    </ul>
		</li>
		<li><a href="#">Clientes</a>
		    <ul class="submenu">
			<li><a href="#">Cadastrar</a></li>
			<li><a href="#">Alterar</a></li>
			<li><a href="#">Pesquisar</a></li>
			<li><a href="#">Excluir</a></li>
		    </ul>
		</li>
		<li><a href="#">Serviços</a>
		    <ul class="submenu">
			<li><a href="#">Manutenção</a></li>
		    </ul>
		</li>
	    </ul>
	</div>
    </body>
</html>
