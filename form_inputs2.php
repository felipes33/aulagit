<form  method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<label> Digite seu nome</label>
<input type="text" id="txt_nome" name="txt_nome" value=""/>
<input type="submit" value="Enviar" name="enviar"/>
<?php
$qtde_lista = $_POST['txt_nome'];
echo '<br> Seu nome:', $qtde_lista, '</br>';
?>
</form>