<action="form_list_ativ" method="POST" action="sel_atividades.php">
    <!--No action do formulário a página sel_atividades.php-->
    <?php
    //criação do array com as atividades esportivas
    $esportes[1]="Futebol";
    $esportes[2]="Basquete";
    $esportes[3]="Volei";
    $esportes[4]="Handbol";
    $esportes[5]="Natação";
    $esportes[6]="Ginástica";
    ?>
    
    
    <h1>Lista de preferências</h1>
    <h3>Marque as atividades esportivas do seu interesse</h3>
    <!-- usando a estrutura de repetição foreach, para criar a quantidade
    de checkbox correspondente ao array, logo se no array tivermos
    seis atividades seis atividades serão criados seis checkbox--->
    
    <?php
    foreach ($esportes as $value){
    /*
    Defenimos dentro do parêntese o array $esportes para $value,
    assim temos para cada chave um par de valores do array aré que todos
    os itens tenha sido recuperados, ou outra condição interna seja encontrada
    Observe que a chave { do loop da linha 17 e termina na linha 33
    tudo que estiver dentro destas chaves será repetido até que sejam
    apresentados todos os valores do loop */    
    ?>
    <input type="checkbox" name="ativ_esporte[]" value="<?php echo $value;?>"/>
<!-- Temos o input do tipo checkbox com o nome ativ_esporte[], estes colchetes
indicam que o mesmo receberá um array, um atributo value deste iserimos
o trecho PHP com a variável $value que recebeu cada valor do array $esportes
desta forma o valor de cada checkbox foi atribuído. o elmento label é usado para exibir
os valores array da página-->
<label> <?php echo $value;?></label>
<?php   
}
?>
<p></p>
<input type="submit" value="Enviar" name="enviar">
</form> 