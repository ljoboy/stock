<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo APP_NAME_FULL ?> | <?php echo isset($title) ? $title : 'Stock Management' ?></title>

	<!-- Bootstrap -->
	<link
		href="<?php echo base_url('assets/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>"
		rel="stylesheet">
	<!-- Font Awesome -->
	<link
		href="<?php echo base_url('assets/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css'); ?>"
		rel="stylesheet">
	<!-- NProgress -->
	<link href="<?php echo base_url('assets/bower_components/gentelella/vendors/nprogress/nprogress.css'); ?>"
		  rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url('assets/bower_components/gentelella/build/css/custom.min.css'); ?>"
		  rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body class="login">
<div>
	<div class="login_wrapper">
		<div class="animate form login_form">
			<section class="login_content">
				<?php
				if (isset($this->session->error)) :
					?>
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-ban"></i> Alerte !</h4>
						<?= $this->session->error ?>
					</div>
				<?php endif; ?>
				<?php echo form_open(site_url('auth/index')) ?>
				<h1>Formulaire d'authentification</h1>

				<div>
					<input autocomplete="username" class="form-control" name="pseudo" placeholder="Nom d'utilisateur"
						   required="" title="Nom d'utilisateur" type="text"/>
					<span class="text-danger"><?php echo form_error('pseudo'); ?></span>
				</div>
				<div>
					<input autocomplete="current-password" class="form-control" name="mdp" placeholder="Mot de passe"
						   required="" title="Mot de passe" type="password"/>
					<span class="text-danger"><?php echo form_error('mdp'); ?></span>
				</div>
				<div>
					<button class="btn btn-default submit" type="submit">Connexion</button>
				</div>

				<?php echo form_close() ?>
				<div class="clearfix"></div>

				<div class="separator">
					<div>
						<h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
						<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>
</body>
</html>
