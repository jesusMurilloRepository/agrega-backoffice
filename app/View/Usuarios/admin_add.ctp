<script type="text/javascript">
	
// $('#UsuarioUsuarioTipo').on('change', function() {


</script>

<div class="usuarios form">

	<div class="row">
		<div class="col-md-12">
			<div class="panel">

				<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                      <!--   <a href="http://mobitap.com.br/agrega_backoffice/admin/ofertas/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a> -->

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">Usuarios App</h2>

            </header>
            	 <?php echo $this->Session->flash(); ?>
				<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Dados do Usuario'); ?>
					</h2>
				</div>


				
				<div class="panel-body">


<?php

	$options['inputDefaults'] = array(
						'label' => false,
						'div' => false,
						'error'=> false,
						'class' => 'form-control',

					);

					$options['novalidate'] = 'novalidate';

					$options['type'] ='file';

					$options1 = array(
						'label' => false,
						'class' => 'btn btn-primary'

					);
 echo $this->Form->create('Usuario',$options); ?>

 			<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								
								<label class="control-label">Tipo de Documento</label>

								<?php echo $this->Form->input('usuario_tipo', array(
								'options' => $tipos,
								'empty' => 'Escolha'
								)
								);?>




						

					</div>
				</div>

		


			</div>

 <div class="row">
							<div id="cpf_cad" style="display: none" class="col-md-6">
							<div class="form-group">

								
								<label  class="control-label">CPF</label>

								<?php echo $this->Form->input('cpf');?>



							</div>
						</div>
							<div id="cnpj_cad" style="display: none" class="col-md-6">
							<div class="form-group">

								
								<label class="control-label">CNPJ</label>

								<?php echo $this->Form->input('cnpj');?>



							</div>

						</div>
						<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Nome</label>

								<?php echo $this->Form->input('nome');?>
							

							</div>
						</div>
					</div>


					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">CEP</label>

								<?php echo $this->Form->input('cep');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">Rua</label>

								<?php echo $this->Form->input('endereco');?>

							</div>
						</div>
					</div>

						 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Bairro</label>

								<?php echo $this->Form->input('bairro');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">Número</label>

								<?php echo $this->Form->input('numero');?>

							</div>
						</div>
					</div>

					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Cidade</label>

								<?php echo $this->Form->input('cidade');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">Estado</label>

								<?php echo $this->Form->input('estado');?>

							</div>
						</div>
					</div>

					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Celular</label>

								<?php echo $this->Form->input('celular');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">E-mail</label>

								<?php echo $this->Form->input('email');?>

							</div>
						</div>
					</div>

					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Senha</label>

								<?php echo $this->Form->input('senha');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">Tipo Carroceria</label>

								
								<?php echo $this->Form->input('tipo_carroceria',array(
									'empty' => 'Escolha',
									'options' => $carrocerias,
									));?>

							</div>
						</div>
					</div>


						 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Tipo de Veiculo</label>

							<?php echo $this->Form->input('tipo_veiculo',array(
									'empty' => 'Escolha',
									'options' => $TipoVeiculo,
									));?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">CNH</label>

								
								<?php echo $this->Form->input('cnh')?>

							</div>
						</div>
					</div>

					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Validade CNH</label>

							<?php echo $this->Form->date('validade_cnh',array(
								'class'=>'form-control',
								'type'=>'date',
								'dateFormat' => 'DMY',
								'placeholder'=> 'DD/MM/YYYY'
								));?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<label class="control-label">Código Repom</label>

								
								<?php echo $this->Form->input('codigo_repom')?>

							</div>
						</div>
					</div>
					 <div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Caminhão Rastreável</label>

							
							<?php echo $this->Form->input('opcoes',array(
									'empty' => 'Escolha',
									'options' => $opcoes,
									));?>




							</div>
						</div>
					</div>










<br>

<?php echo $this->Form->button('Cadastrar',$options1); ?>

</div>
