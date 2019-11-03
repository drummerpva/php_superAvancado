<?php
    require './Template.php';
    $array = array(
        "titulo" => "usando Templates",
        "nome" => "Doug Poma",
        "idade" => 27
    );
    $tpl = new Template("template.phtml");
    $tpl->render($array);