<?php
   require_once "vendor/autoload.php";
   use Paulo\PhpComposeDio\Search;
   $busca = new Search;
   $resultado = $busca->getAddressFromZipCode('01010000');
   print_r($resultado);
?>