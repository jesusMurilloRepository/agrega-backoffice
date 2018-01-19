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

$cakeDescription = __d('cake_dev', 'Agrega: Login');
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
	<section class="body-sign">
    <div class="center-sign">
				<a href="/" class="logo pull-left">
					<img style="margin-top: 20px;" src="http://mobitap.com.br/agrega_backoffice/img/logoAgrega.png" height="30" alt="Porto Admin">
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Entrar</h2>
					</div>
					<div class="panel-body">
						
						<?php echo $this->Flash->render(); ?>


            <?php
              echo $this->Form->create('Usuarios', array('url'=>'/usuarios/login', 'id' => 'UsuariosLogin'));
             ?>



						<!-- <form action="index.html" method="post"> -->
							<div class="form-group mb-lg">
								<label>CPF</label>
								<div class="input-group input-group-icon">
								
									<input name="cpf" type="text" class="form-control input-lg">

									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Senha</label>
									<!-- <a href="pages-recover-password.html" class="pull-right">Lost Password?</a> -->
								</div>
								<div class="input-group input-group-icon">
									<input name="senha" type="password" class="form-control input-lg">
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Entrar</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Entrar</button>
								</div>
							</div>
<!--
							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span> -->


							<!-- <p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a></p> -->

						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">© Copyright <?php echo date("Y") ?>. Todos os direitos reservados.</p>
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
