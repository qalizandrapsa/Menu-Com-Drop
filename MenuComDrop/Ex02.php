<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            ul.nav{
                margin:0;
                padding:0;
            }
            ul.nav li{
                list-style: none;
                position:relative;
                float:left;
            }
            ul.nav li a{
                float:left;
                border-top:0.1em solid #fff;
                border-right: 0.1em solid #909090;
                border-bottom: 0.1em solid #909090;
                border-left: 0.1em solid #fff;
                width: 100px;
                font-size: 10pt;
                font-family: verdana;
                background-color: #f1f1f1;
                color:#333;
                text-align: center;
                padding:4px;
                text-decoration: none;
            }
            ul.nav a:hover{
                background-color: #999;
                color:#fff;
                border-color:#000 #fafafa #fafafa #000;
            }
            ul.nav li ul{
                position:absolute;
                top:27px;
                left:-40px;
                overflow: hidden;
                max-height: 0;
                 -webkit-transition: all 0.4s ease-out;
            }
            ul.nav li:hover ul{
                display: block;
                max-height: 200px;
            }
        </style>
    </head>
    <body>
       <ul class="nav">
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
