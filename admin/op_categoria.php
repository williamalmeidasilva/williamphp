<?php
 include "conexao.php";

 $txt_categoria = $_POST['txt_categoria'];
 $txt_ativo = $_POST['txt_ativo'];

 try { 
 $sql = "INSERT INTO categoria (categoria, cat_ativo) VALUES ('$txt_categoria','$txt_ativo')";
 $resultado=$cn->prepare($sql)->execute([$txt_categoria, $txt_ativo]);  
 if ($resultado){
    print "<script type='text/javascript'>location.href='lista_categoria.php'</script>";
 }
 }catch(exception $e){

 echo "Error", $e->getMessage();
}


?>