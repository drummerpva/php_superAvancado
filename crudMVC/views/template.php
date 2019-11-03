<html>
    <head>
        <title>Meu Site</title>
        <link href="<?php echo BASE_URL;?>assets/css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1>Meus sitema CRUD MVC</h1>
        </header>
        <section>
        <?php $this->loadViewInTemplate($viewName,$viewData);?> 
        </section>
        
        <footer>
            Todos os direitos reservados
        </footer>
        
        <script src="<?php echo BASE_URL;?>assets/js/script.js" type="text/javascript"></script>
    </body>
        
</html>