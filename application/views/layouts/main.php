<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo APP_NAME_FULL ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css');?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css');?>">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo index_page()?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><?php echo APP_NAME_MINI ?></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><?php echo APP_NAME_FULL ?></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url('assets/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo ucwords($this->session->username); ?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php echo base_url('assets/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

								<p>
									<?php echo ucwords($this->session->nom_complet.' - '. $this->session->type); ?>
									<small>Agent depuis le <?= nice_date($this->session->create_time,"d M Y") ?></small>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="<?php echo site_url('auth/profil') ?>" class="btn btn-default btn-flat">Profil</a>
								</div>
								<div class="pull-right">
									<a href="<?php echo site_url('auth/logout') ?>" class="btn btn-default btn-flat">Déconnexion</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="<?php echo base_url('assets/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo ucwords($this->session->nom_complet); ?></p>
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">MENU PRINCIPAL</li>
				<li class="<?php echo current_page('dashboard') ?>">
					<a href="<?php echo site_url('dashboard/index');?>">
						<i class="fa fa-dashboard"></i> <span>Tableau de bord</span>
					</a>
				</li>
				<li class="<?php echo current_page('article') ?>">
					<a href="#">
						<i class="fa fa-cart-arrow-down"></i> <span>Article</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('article/add') ?>">
							<a href="<?php echo site_url('article/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('article/index') ?>">
							<a href="<?php echo site_url('article/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('articles_site') ?>">
					<a href="#">
						<i class="fa fa-ambulance"></i> <span>Articles Site</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('articles_site/add') ?>">
							<a href="<?php echo site_url('articles_site/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('articles_site/index') ?>">
							<a href="<?php echo site_url('articles_site/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('notification') ?>">
					<a href="#">
						<i class="fa fa-bell"></i> <span>Notification</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('notification/add') ?>">
							<a href="<?php echo site_url('notification/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('notification/index') ?>">
							<a href="<?php echo site_url('notification/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('site') ?>">
					<a href="#">
						<i class="fa fa-map-marker"></i> <span>Site</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('site/add') ?>">
							<a href="<?php echo site_url('site/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('site/index') ?>">
							<a href="<?php echo site_url('site/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('sorti') ?>">
					<a href="#">
						<i class="fa fa-paper-plane-o"></i> <span>Sorti</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('sorti/add') ?>">
							<a href="<?php echo site_url('sorti/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('sorti/index') ?>">
							<a href="<?php echo site_url('sorti/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('transfert') ?>">
					<a href="#">
						<i class="fa fa-arrow-right"></i> <span>Transfert</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('transfert/add') ?>">
							<a href="<?php echo site_url('transfert/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('transfert/index') ?>">
							<a href="<?php echo site_url('transfert/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
				<li class="<?php echo current_page('user') ?>">
					<a href="#">
						<i class="fa fa-user-circle"></i> <span>User</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo current_page('user/add') ?>">
							<a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Ajouter</a>
						</li>
						<li class="<?php echo current_page('user/index') ?>">
							<a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Lister</a>
						</li>
					</ul>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
			<?php
			if(isset($_view) && $_view)
				$this->load->view($_view);
			?>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
			<b>Version</b> <?php echo APP_VERSION ?>
		</div>
		<strong>Copyright © <?php echo date('Y') ?> <a href="https://about.me/ljoboy">Lijerbul LJOBOY</a>.</strong> Tous droits réservés.
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Create the tabs -->
		<ul class="nav nav-tabs nav-justified control-sidebar-tabs">

		</ul>
		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Home tab content -->
			<div class="tab-pane" id="control-sidebar-home-tab">

			</div>
			<!-- /.tab-pane -->
			<!-- Stats tab content -->
			<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
			<!-- /.tab-pane -->

		</div>
	</aside>
	<!-- /.control-sidebar -->
	<!-- Ajouter the sidebar's background. This div must be placed
    immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/js/jquery-2.2.3.min.js');?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/js/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/js/app.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/js/demo.js');?>"></script>
<!-- DatePicker -->
<script src="<?php echo base_url('assets/js/moment.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/global.js');?>"></script>
</body>
</html>
