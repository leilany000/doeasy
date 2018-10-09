
<html>
  <head>
		<link rel="stylesheet" type="text/CSS" href="style.css" />
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	</head>
	<body>

		<style>

		

		</style>
		<div class="portfoliocard">
		<div class="coverphoto"></div>
		<div class="profile_picture"></div>
		<div class="left_col">
			<div class="followers">
				<div class="follow_count">0</div>
				Solicitações
			</div>
		</div>
		<div class="right_col">
			<h2 class="name"><?= $this->session->userdata("usuario")->nome; ?></h2> 
<h3 class="location"><?= $this->session->userdata("usuario")->tipo; ?></h3> 
			<ul class="contact_information">
				<li class="website"><a class="nostyle" href="#"><?= $this->session->userdata("usuario")->email; ?></a></li> <br> 
				<li class="mail"><?= $this->session->userdata("usuario")->endereco; ?></li> <br> 
				<li class="phone"><?= $this->session->userdata("usuario")->telefone; ?></li>
        <div class="boton">
					<a href="#">Editar</a>
				</div> 
			</ul>
		</div>
		</div>
	</body>
</html>
