<?php 
//En este ejerc�cio se auto llmama
if (isset($_GET['nombre']) && isset($_GET['password'])) {
    //El isset devuelve true o false, si la variable tiene valor es true, si no es false
// si el nombre y la contrase�a no est�n en blanco debe aludar y mostrar contrase�a
} else {
    //Si el nombre y contrase�a est�n en blanco muestra el formulario
echo <<<HTML

<form action="html15.php" method="get">
<fieldset>
<legend>Datos</legend>
<label for="nombre">Nombre</label><input id="nombre" type="text" name="nombre"><br/>
<label for="password">Contrase�a</label><input id="password" type="password" name="password"><br/>
<input type="submit">
</fieldset>
</form>

HTML;

}

?>