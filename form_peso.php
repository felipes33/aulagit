<form method="POST" action="form_peso.php">
    <label>Digite o 1º peso</label>
    <input type="text" id="txt_peso1" name="txt_peso1" value="">
    <br><br>
    <label>Digite o 2º peso</label>
    <input type="text" id="txt_peso2" name="txt_peso2" value="">
    <br><br>
    <label>Digite o 3º peso</label>
    <input type="text" id="txt_peso3" name="txt_peso3" value="">
    <br><br>
    <input type="submit" value="Enviar" name="enviar">
    <br><br>
    <?php
    $maior_peso;
    $peso1 = $_POST['txt_peso1'];
    $peso2 = $_POST['txt_peso2'];
    $peso3 = $_POST['txt_peso3'];
    $maior_peso = $peso1;
    if ($maior_peso < $peso2) {
        $maior_peso = $peso2;
    }
    if ($maior_peso < $peso3) {
        $maior_peso = $peso3;
    }
    ?>
    <label>Maior peso aferido</label>
    <input type="text" id="resultado_peso" name="resultado_peso"
    readonly="true" value="<?php echo $maior_peso;?>" />
</form>