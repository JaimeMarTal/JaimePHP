<div class="container">
	<form action="<?= base_url() ?>home/registrarPost" method="POST">
  <div class="form-group">
    <label for="usuario">Usuario:</label>
    <input type="text" class="form-control" id="usuario" name="usuario">
  </div>
  <div class="form-group">
    <label for="pwd">Contraseña:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
</div>