<?php
include './Contato.class.php';

$contato = new Contato();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CRUD com Modal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos.css" rel="stylesheet"/>
    </head>
    <body>
        <h1>Contatos</h1>
        <a href="adicionar.php" class="modalAjax">[ ADICIONAR ]</a>
        <table border='1' width="600">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>
            <?php
            $list = $contato->getAll();
            foreach ($list as $item) {
                ?>
                <tr>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td nowrap>
                        <a href="editar.php?id=<?php echo $item['id']; ?>" class="modalAjax">[ EDITAR ]</a>
                        <a href="excluir.php?id=<?php echo $item['id']; ?>">[ EXCLUIR ]</a>
                    </td>
                </tr>


                <?php
            }
            ?>
        </table>
        
        <div class="bgModal">
            <div class="modal"> 
                
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script src="jquery.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>