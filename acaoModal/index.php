<?php
include './Contato.class.php';

$contato = new Contato();
?>
<html><head>
        <title>Ação Modal</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <link rel="stylesheet" href="estilos.css"/>
    </head>
    <body>
        <h1>Contatos</h1>
        <a href="adicionar.php">[ ADICIONAR ]</a>
        <table border='1' width="600" class="table table-dark">
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
                        <a href="javascript:;" onclick="editar(<?php echo $item['id']?>)">[ EDITAR ]</a>
                        <a href="javascript:;" onclick="excluir(<?php echo $item['id']?>)">[ EXCLUIR ]</a>
                    </td>
                </tr>


                <?php
            }
            ?>
        </table>

        
        <div class="modal fade" id="modal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
        
        
        <script type="text/javascript" src="jquery.js"></script>
        <script type="text/javascript" src="bootstrap.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
        
    </body>
</html>