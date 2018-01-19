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

$cakeDescription = __d('cake_dev', 'Agrega: Administração');
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


	



	<script src="<?php echo $this->base;?>/assets/vendor/jquery/jquery.js"></script>
	

	 <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" /> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
  <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> -->



<!-- 	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/bootstrap-select/bootstrap-select.min.css" />
	<script src="<?php echo $this->base;?>/assets/vendor/bootstrap-select/bootstrap-select.min.js"></script> -->


	<link rel="stylesheet" href="<?php echo $this->base;?>/assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

	<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->

<!-- Include Date Range Picker -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->

 <style>
        .demo-section label {
            display: block;
            margin: 15px 0 5px 0;
        }
        #get {
            float: right;
            margin: 25px auto 0;
        }
    </style>

<!-- Vendor -->



</head>
<body>
	<section class="body">
		<header class="header">
			<div class="logo-container">
				<a href="http://mobitap.com.br/agrega_backoffice/admin/" class="logo">
					<img src="http://mobitap.com.br/agrega_backoffice/img/logoAgrega.png" height="30" alt="Porto Admin">
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
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Meu Perfil</a>
								</li> -->
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
									<a href="<?php echo $this->base ?>/">
										<i class="fa fa-home" aria-hidden="true"></i>
										<span>Dashboard</span>
									</a>
								</li>

								

										<li class="nav-parent <?= $this->App->activeURL("ofertas", "nav-active nav-expanded") ?>">
											<a href="#">
										<i class="fa fa-bell" aria-hidden="true"></i>
										<span>Ofertas</span>
									</a>

											<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/ofertas/">
												Listar todas
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/ofertas/add">
												Cadastrar nova
												</a>
											</li>

											<li>
												<a href="<?php echo $this->base ?>/admin/ofertas/finalizadas">
												Ofertas Finalizadas
												</a>
											</li>

									
										</li>
									</ul>
									

							<li class="nav-parent <?= $this->App->activeURL("produtos", "nav-active nav-expanded") ?>">
											<a href="#">
										<i class="fa fa-product-hunt"></i>
										<span>Produtos</span>
									</a>

									<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/produtos/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/produtos/add">
												Cadastrar novo
												</a>
											</li>
									</ul>
							</li>

								<li class="nav-parent <?= $this->App->activeURL("clientes", "nav-active nav-expanded") ?>">
											<a href="#">
										<i class="fa fa-user"></i>
										<span>Clientes</span>
									</a>

									<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/clientes/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/clientes/add">
												Cadastrar novo
												</a>
											</li>
									</ul>
							</li>





									


							
								<li class="nav-parent <?= $this->App->activeURL("lances", "nav-active nav-expanded") ?>">
									<a href="#">
										<i class="fa fa-gavel" aria-hidden="true"></i>
										<span>Lances</span>
									</a>
									
										<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/lances/">
												Listar todos
													</a>
											</li>
											
									</ul>

								</li>
						
							




							
							<li class="nav-parent <?= $this->App->activeURL("TipoCarroceria", "nav-active nav-expanded") ?>">
									<a href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<span>Tipo de carroceria</span>
									</a>
										<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/TipoCarroceria/">
												Listar todas
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/TipoCarroceria/add">
												Cadastrar nova
												</a>
											</li>
									</ul>
								</li>

						

							
							<li class="nav-parent <?= $this->App->activeURL("usuarios", "nav-active nav-expanded") ?>">
									<a href="#">
										<i class="fa fa-group" aria-hidden="true"></i>
										<span>Usuários do App</span>
									</a>
										<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/usuarios/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/usuarios/add">
												Cadastrar novo
												</a>
											</li>
									</ul>
								</li>

						


							
								
								

							

							

						<!-- <li class="nav-parent <?= $this->App->activeURL("veiculos", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-car" aria-hidden="true"></i>

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

								</ul>

								<ul class="nav nav-children">

										<li class="nav-parent">

											<a href="#">
												Modelos
											</a>

											<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/modelos/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/modelos/add">
												Cadastrar novo
												</a>
											</li>
										</ul>
										</li>
										</ul>

								<ul class="nav nav-children">

										<li class="nav-parent">

											<a href="#">
												Acessorios
											</a>

											<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/acessorios/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/acessorios/add">
												Cadastrar novo
												</a>
											</li>
										</ul>
									</li>
										</ul>


									<ul class="nav nav-children">

										<li class="nav-parent ">

											<a href="#">
												Tipos
											</a>

											<ul class="nav nav-children" style="">
											<li>
													<a href="<?php echo $this->base ?>/admin/tipos/">
												Listar todos
													</a>
											</li>
											<li>
												<a href="<?php echo $this->base ?>/admin/tipos/add">
												Cadastrar novo
												</a>
											</li>
										</ul>
										</li>
										</ul>
										</li>


							<li class="nav-parent <?= $this->App->activeURL("promocoes", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-bell" aria-hidden="true"></i>
									<span>Promoções</span>
								</a>

								<ul class="nav nav-children">

								<li>
										<a href="<?php echo $this->base ?>/admin/promocoes/">
											Listar todos
										</a>
									</li>
									<li>
										<a href="<?php echo $this->base ?>/admin/promocoes/add">
											Adicionar novo
										</a>
									</li>
									<li class="disabled">
										<a href="extra-ajax-made-easy.html">
											Relatórios
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-parent <?= $this->App->activeURL("taxas", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-money" aria-hidden="true"></i>
									<span>Taxas para traslados</span>
								</a>

								<ul class="nav nav-children">

								<li>
										<a href="<?php echo $this->base ?>/admin/taxas/">
											Listar todos
										</a>
									</li>
									<li>
										<a href="<?php echo $this->base ?>/admin/taxas/add">
											Adicionar novo
										</a>
									</li>
									<li class="disabled">
										<a href="extra-ajax-made-easy.html">
											Relatórios
										</a>
									</li>
								</ul>
							</li>


							<li class="nav-parent <?= $this->App->activeURL("motivorecusas", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-archive" aria-hidden="true"></i>
									<span>Motivo de Recusas</span>
								</a>

								<ul class="nav nav-children">

								<li>
										<a href="<?php echo $this->base ?>/admin/motivorecusas/">
											Listar todos
										</a>
									</li>
									<li>
										<a href="<?php echo $this->base ?>/admin/motivorecusas/add">
											Adicionar novo
										</a>
									</li>
									<li class="disabled">
										<a href="extra-ajax-made-easy.html">
											Relatórios
										</a>
									</li>
								</ul>
							</li>


								<li class="nav-parent <?= $this->App->activeURL("motivorecusas", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-copy" aria-hidden="true"></i>
									<span>Traslados</span>
								</a>

								<ul class="nav nav-children">

								<li>
										<a href="<?php echo $this->base ?>/admin/traslados/">
											Listar Todos Traslados
										</a>
									</li>

									<li>
										<a href="<?php echo $this->base ?>/admin/traslados/index/3">
											Listar Traslados Pendentes
										</a>
									</li>


								</ul>
							</li>

							

							<li class="nav-parent <?= $this->App->activeURL("motivorecusas", "nav-active nav-expanded") ?>">
								<a href="#">
									<i class="fa fa-copy" aria-hidden="true"></i>
									<span>Locações</span>
								</a>

								<ul class="nav nav-children">

								<li>
										<a href="<?php echo $this->base ?>/admin/locacoes/">
											Listar Todas Locações
										</a>
									</li>

								
								</ul> -->
							</li>







						</ul>





					</nav>
				</div>

				<div class="nano-pane" style="opacity: 1; visibility: visible;"><div class="nano-slider" style="height: 227px; transform: translate(0px, 92.093px);"></div></div></div>

			</aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">

				
				<!-- <?php echo $this->Session->flash(); ?> -->
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







	<script src="<?php echo $this->base;?>/assets/vendor/select2/select2.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
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
	<!-- <script src="<?php echo $this->base;?>/assets/javascripts/pages/examples.calendar.js"></script> -->
	<script src="<?php echo $this->base;?>/assets/vendor/pnotify/pnotify.custom.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/select2/select2.js"></script>
	<script src="<?php echo $this->base;?>/assets/vendor/jquery-validation/jquery.validate.js"></script>
	<script type="text/javascript" src="<?php echo $this->base;?>/assets/vendor/mask/jquery.mask.js"></script>

<?php echo $this->fetch('script'); ?>





	<script>


		$(document).ready(function(){
			
 $('#money').mask('000.000.000.000.000,00', {reverse: true});

 $('#minimo').mask('000.000.000.000.000,00', {reverse: true});

  $('#OfertaTelefoneOrigem').mask('(00) 00000-0000');
  $('#OfertaTelefoneDestino').mask('(00) 00000-0000');
  $('#UsuarioCelular').mask('(00) 00000-0000');


   $('#UsuarioCep').mask('00000-000');


    // $('#cpf_cad').mask('000.000.000-00', {reverse: true});
  // $('#cnpj_cad').mask('00.000.000/0000-00', {reverse: true});

});	


$(document).ready(function(){


	$('#UsuarioUsuarioTipo').change(function(){

	
	var selecionado = $(this).val();

	if(selecionado == "CPF"){

		$('#cpf_cad').show();
		$('#cnpj_cad').hide();

	}


	else if(selecionado == "CNPJ"){

		$('#cnpj_cad').show();
		$('#cpf_cad').hide();

	}



})



   

});
		
		$(document).ready(function(){

			var date_input=$('input[name="data[Promocao][validade]"]'); //our date input has the name "date"


			var container = $('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			date_input.datepicker({
				format: 'yyyy/mm/dd',
				container: container,
				todayHighlight: true,
				autoclose: true,
			})
		// })

		// $(document).ready(function(){
			var date_input=$('input[name="data[Veiculo][ultima_revisao]"]');//our date input has the name "date"


			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			date_input.datepicker({
				format: 'yyyy/mm/dd',
				container: container,
				todayHighlight: true,
				autoclose: true,
			})
		// })


	//	 $(document).ready(function(){
			var date_input=$('input[name="data[Usuario][datanascimento]"]');//our date input has the name "date"
			var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
			date_input.datepicker({
				format: 'yyyy/mm/dd',
				container: container,
				todayHighlight: true,
				autoclose: true,
			})
		// })











		})



		



	</script>




</body>
</html>
