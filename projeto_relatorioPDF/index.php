<?php 
ob_start(); 
?>
<h1>Relatório</h1>
<table border='1' width='100%'>
    <tr>
        <th>Nome do Cliente</th>
        <th>Valor do Pedido</th>
        <th>Data da Entrega</th>
    </tr>
    <tr>
        <td>Douglas</td>
        <td>R$ 2.195,05</td>
        <td>28/10/2018</td>
    </tr>
    <tr>
        <td>Douglas</td>
        <td>R$ 2.195,05</td>
        <td>28/10/2018</td>
    </tr>
    <tr>
        <td>Douglas</td>
        <td>R$ 2.195,05</td>
        <td>28/10/2018</td>
    </tr>
    <tr>
        <td>Douglas</td>
        <td>R$ 2.195,05</td>
        <td>28/10/2018</td>
    </tr>
    <tr>
        <td>Douglas</td>
        <td>R$ 2.195,05</td>
        <td>28/10/2018</td>
    </tr>
        
</table>

<?php
$html = ob_get_contents();
ob_end_clean();

require "./vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
//mostra na tela
//$mpdf->Output();

//fazer download - 
// - I = abre no browser
// - D = força download
// - F = Salva no Servidor
$mpdf->Output("arquivo.pdf","F");
$link = "http://localhost/PHP0aoPro/comgit/phpSuperAvancado/projeto_relatorioPDF/arquivo.pdf";
echo "Faça o Download no Link<a href='$link'> PDF</a>";

?>