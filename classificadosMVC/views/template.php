<html>
    <head>
        <title>Meu Site</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar  navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="./" class="navbar-brand">Classificados</a>
                </div>
                <ul class="nav navbar navbar-right">
                    <?php if (empty($_SESSION['cLogin'])) { ?>
                        <li class="nav-item nav-link"><a href="./cadastrar">Cadastre-se</a></li>
                        <li class="nav-item nav-link"><a href="./login">Login</a></li>
                    <?php } else { ?>
                        <li class="navbar-text"><?php //echo $usuario['nome']; ?></li>
                        <li class="nav-item nav-link"><a href="./anuncios">Meus Anúncios</a></li>
                        <li class="nav-item nav-link"><a href="./login/sair">Sair</a></li>
                        <?php } ?>
                </ul>
            </div>
        </nav>

        <?php $this->loadViewInTemplate($viewName, $viewData); ?> 

        <script src="./js/jquery.js" type="text/javascript"></script>
        <script src="./js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./js/script.js" type="text/javascript"></script>
    </body>

</html>