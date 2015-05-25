<!DOCTYPE html>
	<html lang="es">
	<head>

	</head>
	<body>
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido de nuevo <?=$this->session->userdata('perfil')?></h1>
				<?php echo anchor(base_url().'c_login/logout_ci', 'Cerrar sesión')?>
			</div>
		</div>	
	</body>
</html>