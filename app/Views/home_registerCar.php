<?=$this->include("default_header", array('title' => $title));?>
    <div class="d-flex justify-content-center">
		  <form id="content" class="d-grid gap-2">
			  <input type="text" class="form-control" name="placa" id="placa" placeholder="Placa" required>
        <br>
        <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo" required>
        <br>
        <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca" required>
        <br>
        <button type="button" class="btn btn-primary" id="regCar">Cadastrar</button>
		  </form>
	  </div>
<?=$this->include("default_footer", array('title' => $title));?>