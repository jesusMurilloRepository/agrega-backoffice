<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Eu Mudei: Administração');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<!--  -->
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/fullcalendar/fullcalendar.css" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/fullcalendar/fullcalendar.print.css" media="print" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/pnotify/pnotify.custom.css" />
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/select2/select2.css" />
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/stylesheets/theme.css" />
	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/stylesheets/skins/default.css" />
	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/stylesheets/theme-custom.css">
	<!-- Head Libs -->
	<script src="<?php echo $this->base;?>/assets/vendor/modernizr/modernizr.js"></script>

	<?php
	echo $this->Html->meta('icon');
	echo $this->fetch('css');
	?>
</head>
<body>
	<section class="body">
		<header class="header">
			<div class="logo-container">
				<a href="../1.7.0" class="logo">
					<img src="http://placehold.it/100x100" width="75" height="35" alt="Porto Admin">
				</a>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">
				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="http://placehold.it/100x100" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg">
						</figure>
						<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
							<span class="name"><?php echo $this->Session->read("Usuarios.nome") ?></span>
							<span class="role">Administrador</span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled">
							<li class="divider"></li>
							<li>
								<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Meu Perfil</a>
							</li>
							<li>
								<a role="menuitem" tabindex="-1" href="<?php echo $this->base."/usuarios/sair" ?>"><i class="fa fa-power-off"></i> Sair</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>


		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">

				<div class="sidebar-header">
					<div class="sidebar-title">
						Menu
					</div>
				</div>

				<div class="nano">
					<div class="nano-content" tabindex="0">
						<nav id="menu" class="nav-main" role="navigation">



							<ul class="nav nav-main">
								<li>
									<a href="<?php echo $this->base ?>/admin/">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Início</span>
									</a>
								</li>
								
								


								<li class="nav-parent">
									<a href="#">
										<i class="fa fa-group" aria-hidden="true"></i>
										<span>Usuários</span>
									</a>
									<ul class="nav nav-children">

										<li class="nav-parent nav-expanded">
										
											<a href="<?php echo $this->base ?>/admin/usuarios/">
												Passageiros
											</a>

											<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/usuarios/">
												Passageiros
													</a>
											</li>
											<li>
												<a>
													Second Level Link #2
												</a>
											</li>
										</ul>



										</li>


										<li class="nav-parent nav-expanded">
										
											<a href="<?php echo $this->base ?>/admin/usuarios/">
												Passageiros PJ
											</a>
										</li>

										<li class="nav-parent nav-expanded">
										
											<a href="<?php echo $this->base ?>/admin/usuarios/">
												Motorista PF
											</a>
										</li>

										<li class="nav-parent nav-expanded">
										
											<a href="<?php echo $this->base ?>/admin/usuarios/">
												Motorista PJ
											</a>
										</li>


										<li class="nav-parent nav-expanded">
										
											<a href="<?php echo $this->base ?>/admin/usuarios/">
												Gestor PJ
											</a>
										</li>



									</ul>
								</li>
							</li>


							<li class="nav-parent disabled	" >
								<a href="#">
									<i class="fa fa-align-left" aria-hidden="true"></i>
									<span>Usuários</span>
								</a>


								<ul class="nav nav-children" style="">

									<li class="nav-parent nav-expanded">

										<a href="#">
											Second Level
										</a>

										<ul class="nav nav-children" style="">
											<li>
												<a>
													Second Level Link #1
												</a>
											</li>
											<li>
												<a>
													Second Level Link #2
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>





							<li class="nav-parent">
								<a href="#">
									<i class="fa fa-group" aria-hidden="true"></i>
									<span>Veículos</span>
								</a>
								<ul class="nav nav-children">
									<li>
										<a href="<?php echo $this->base ?>/admin/veiculos/">
											Listar todos
										</a>
									</li>
									<li>
										<a href="<?php echo $this->base ?>/admin/veiculos/add">
											Cadastrar novo
										</a>
									</li>
									<li class="disabled">
										<a href="<?php echo $this->base ?>/admin/veiculos/relatorio">
											Relatório
										</a>
									</li>
								</ul>
							</li>











							<li class="nav-parent disabled">
								<a href="#">
									<i class="fa fa-book" aria-hidden="true"></i>
									<span>Exemplo</span>
								</a>
								<ul class="nav nav-children">
									<li class="disabled">
										<a href="extra-changelog.html">
											Ver todos
										</a>
									</li>
									<li class="disabled">
										<a href="extra-ajax-made-easy.html">
											Relatórios
										</a>
									</li>
								</ul>
							</li>
						</ul>





					</nav>
				</div>

				<div class="nano-pane" style="opacity: 1; visibility: visible;"><div class="nano-slider" style="height: 227px; transform: translate(0px, 92.093px);"></div></div></div>

			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">

				<?php echo $this->Session->flash(); ?>

				<?php echo $this->fetch('content'); ?>

			</section>
		</div>



	</section>







	<?php //echo $this->element('sql_dump'); ?>

	<script src="<?php echo $this->base;?>/assets/vendor/jquery/jquery.js"></script>

	<script src="<?php echo $this->base;?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
	<!-- Specific Page Vendor -->
	<script src="<?php echo $this->base;?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/fullcalendar/lib/moment.min.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/fullcalendar/fullcalendar.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/nprogress/nprogress.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="<?php echo $this->base;?>/assets/javascripts/theme.js"></script>
	<!-- Theme Custom -->
	<script src="<?php echo $this->base;?>/assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="<?php echo $this->base;?>/assets/javascripts/theme.init.js"></script>
	<!-- Examples -->
	<script src="<?php echo $this->base;?>/assets/javascripts/pages/examples.calendar.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/pnotify/pnotify.custom.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/select2/select2.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/jquery-validation/jquery.validate.js"></script>


</body>
</html>
