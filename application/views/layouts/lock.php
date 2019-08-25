<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= APP_NAME_FULL ?> | Ecran de vérouillage</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css'); ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
	<div class="lockscreen-logo">
		<a href="<?php echo index_page() ?>"><b><?php echo APP_NAME_FULL; ?></b></a>
	</div>
	<!-- User name -->
	<div class="lockscreen-name"><?php echo ucwords($nom_complet); ?></div>

	<!-- START LOCK SCREEN ITEM -->
	<div class="lockscreen-item">
		<!-- lockscreen image -->
		<div class="lockscreen-image">
			<img src="<?php echo base_url('assets/img/user2-160x160.jpg'); ?>" alt="User Image">
		</div>
		<!-- /.lockscreen-image -->

		<!-- lockscreen credentials (contains the form) -->
		<?php echo form_open('auth/lock', 'class="lockscreen-credentials"') ?>
		<div class="input-group">
			<input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe ici..."
				   title="Mot de passe" required/>

			<div class="input-group-btn">
				<button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
			</div>
		</div>
		<?php echo form_close(); ?>
		<!-- /.lockscreen credentials -->

	</div>
	<div class="error-content text-center text-red">
		<?php echo $this->session->error; ?>
	</div>
	<!-- /.lockscreen-item -->
	<div class="help-block text-center">
		Entrez votre mot de passe pour retrouver votre session
	</div>
	<div class="text-center">
		<a href="<?php echo site_url('auth/index'); ?>">Ou connectez vous avec un autre compte</a>
	</div>
	<div class="lockscreen-footer text-center">
		<strong>Copyright © <?php echo date('Y') ?> <a href="https://about.me/ljoboy">Lijerbul LJOBOY</a>.</strong> Tous
		droits réservés.
	</div>
</div>
<!-- /.center -->

<!-- jQuery 3 -->
<script src="<?= base_url('assets/js/jquery-2.2.3.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>
