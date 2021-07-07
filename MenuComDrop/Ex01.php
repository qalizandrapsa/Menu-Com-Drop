<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            *{
               margin:0;
               padding:0;
            }
            .menu{
                border:1px solid #c0c0c0;
                float: left;
            }
            .menu li{
                list-style: none;
                border-right: 1px solid #c0c0c0;
                float:left;
                position:relative;
            }
            .menu li a{
                color:#333;
                text-decoration: none;
                padding:5px 10px;
                display: block;
            }
            .menu li a:hover{
                color:#fff;
                background-color: #333;
                text-shadow: 0px 0px 5px #fff;
                box-shadow: 0 3px 10px 0 #ccc;
            }
            .menu li ul{
                position:absolute;
                display:none;
            }
            .menu li:hover ul{
                display: block;
            }
            .menu li ul li{
                width: 140px;
                border:1px solid #c0c0c0;
            }
            
        </style>
    </head>
    <body>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Funcionários</a>
                <ul>
                    <li><a href="#">Cadastrar</a></li>
                    <li><a href="#">Alterar</a></li>
                    <li><a href="#">Pesquisar</a></li>
                    <li><a href="#">Excluir</a></li>
                </ul>
            </li>
            <li><a href="#">Clientes</a>
                <ul>
                    <li><a href="#">Cadastrar</a></li>
                    <li><a href="#">Alterar</a></li>
                    <li><a href="#">Pesquisar</a></li>
                    <li><a href="#">Excluir</a></li>
                </ul>
            </li>
            <li><a href="#">Serviços</a>
                <ul>
                     <li><a href="#">Manutenção</a></li>
                </ul>
            </li>
        </ul>
    </body>
</html>
