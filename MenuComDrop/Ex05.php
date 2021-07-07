<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Menu com DROP EX05 </title>
	<style type="text/css">
	    body{
		background-image: url('imagem/DPunk.jpg');
		font-family: arial ; 
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
		background-color: #0fa1e0;
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
		<li><a href="#">Home</a></li>
		<li><a href="#">Products</a>
		    <ul class="submenu">
			<li><a>Product 1</a></li>
			<li><a>Product 2</a></li>
		    </ul></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
	    </ul>
	    
	</div>
    </body>
</html>
