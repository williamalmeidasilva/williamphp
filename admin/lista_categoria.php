<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
    <link rel="stylesheet" href="css/style_admin.css">
</head>
<body>
    <table width="100%" border="0" cellpadding = "0" cellspacing="1" bgcolor="#660000">
        <tr bgcolor="#993300" align="center">
            <td width="15%" heigth="2"><strong><font size="2" color="#fff">Código</font></strong></td>
            <td width="60%" heigth="20"><strong><font size="2" color="#fff">Categoria</font></strong></td>
            <td width="15%" heigth="20"><strong><font size="2" color="#fff">Ativo</font></strong></td>
            <td colspan="2" heigth="20"><strong><font size="2" color="#fff">Opcões</font></strong></td>
        </tr>
      
    
    <?php
    include_once 'conexao.php';
    
    $res = $cn->query("SELECT * FROM categoria");

    while ($row = $res->fetch()){


    ?>
    <tr bgcolor="#fff">
            <td><font size="2" face="verdana,arial"><?php echo $row ['id_categoria']?></font></td> 
            <td><font size="2" face="verdana,arial"><?php echo $row ['categoria']?></font></td>
            <td><font size="2" face="verdana,arial"><?php echo $row ['cat_ativo']?></font></td> 
            <td align="center"><font size="2" face="verdana,arial"><a href="principal.php?link=">Alterar</a></font></td>
            <td align="center"><font size="2" face="verdana,arial"><a href="principal.php?link=">Excluir</a></font></td>

        </tr>

<?php
}
?>
</table>
</body>
</html>