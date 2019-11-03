<html>
    <head>
        <title>Meu Site</title>
        <link href="<?php echo BASE_URL;?>assets/css/estilos.css" rel="stylesheet" />
    </head>
    <body>
        <h1>Esse é o topo</h1>
        <a href="<?php echo BASE_URL;?>home">Home</a>
        <a href="<?php echo BASE_URL;?>galeria">Galeria</a>
        <hr/>
        
        <?php $this->loadViewInTemplate($viewName,$viewData);?> 
        
        <script src="<?php echo BASE_URL;?>assets/js/script.js" type="text/javascript"></script>
    </body>
        
</html>