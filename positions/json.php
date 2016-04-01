
<?php

defined( '_JEXEC' ) or die;

//observe a forma de por os campos, se não for assim pode dar errado.
//basta mudar os nomes do campos para os seus para mais campos acrecente uma virgula no penultimo campo
// assim "nome" => $item->getValue('nome'), "seu campo" => $item->getValue('seu campo')
// Se colocar uma , no último vai dar problema com Json





$items = $cck->getItems();




    $out = array();
   foreach( $items as $item ) {
    $out[] = array("Imagem" => $item->get('img_principal')->value, "nome" => $item->getValue('nome'),"cidade" => $item->getValue('cidade'), "estado" => $item->getValue('estado'));

?>


<?php } ?>
<?php
$jso = json_encode($out,JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);


echo $jso;

 ?>
