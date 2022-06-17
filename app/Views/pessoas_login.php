<?=$this->include("default_header", array('title' => $title));?>
	<div class="d-flex justify-content-center">
		<form id="content" class="d-grid">
			<input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
			<br>
			<input type="password" class="form-control" name="password" id="password" placeholder="Senha" required>
			<br>
			<button class="btn btn-primary" type="submit">Entrar</button>
		</form>
	</div>
<?=$this->include("default_footer", array('title' => $title));?>