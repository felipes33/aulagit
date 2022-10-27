<form action="form_inputs.php" method="post" >
    <label>Digite seu nome</label>
    <input type="text" id="txt_nome" name="txt_nome" value="">
    <!--typw text para campo de texto e submit para o botão -->
    <input type="submit" value="Enviar" name="Enviar">
    <?php
    $qtde_lista = $_POST['txt_nome'];
    /* a variável $qtde_lista vai receber uma variável do metodo post['txt_nome'], 
    esse valor é recebido com o id txt_nome, depois exibido na tela pelo echo. 
    O action do formulário vai chamar ele sem o form_inputs.php e tudo que está dentro
    do bloco php será executado*/

    echo '<br> Seu nome:', $qtde_lista, '</br>'
    ?>

</form>