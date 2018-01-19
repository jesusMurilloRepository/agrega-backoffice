<div class="usuarios form">

	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Cadastrar Novo'); ?>
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



					echo $this->Form->create('Lance', $options);
					?>


					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Endereço de origem</label>

								<?php echo $this->Form->input('endereco_origem');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Endereço de origem</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('endereco_origem');?>

							</div>
						</div>
					</div>
				<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Cliente origem</label>

								<?php echo $this->Form->input('cliente_origem');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Endereço de destino</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('endereco_destino');?>

							</div>
						</div>
					</div>

					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Cliente destino</label>

								<?php echo $this->Form->input('cliente_destino');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">cidade de origem</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('cidade_origem');?>

							</div>
						</div>
					</div>

					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">cidade de destino</label>

								<?php echo $this->Form->input('cidade_destino');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">estado de origem</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('estado_origem');?>

							</div>
						</div>
					</div>


					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">estado de destino</label>

								<?php echo $this->Form->input('estado_destino');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">data de origem</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('data_origem');?>

							</div>
						</div>
					</div>


					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">data de destino</label>

								<?php echo $this->Form->input('data_destino');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">telefone de origem</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('telefone_origem');?>

							</div>
						</div>
					</div>

						<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">telefone de destino</label>

								<?php echo $this->Form->input('telefone_destino');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">tipo de destino</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('destino_tipo');?>

							</div>
						</div>
					</div>

					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Agendado?</label>

								<?php echo $this->Form->input('agendado');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Peso da Carga</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('peso_carga');?>

							</div>
						</div>
					</div>

					<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">volume da carga</label>

								<?php echo $this->Form->input('volume_carga');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">Tipo de caminhao</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('caminhao_tipo_id');?>

							</div>
						</div>
					</div>

						<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Produto</label>

								<?php echo $this->Form->input('produto');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">tipo carroceria</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('carroceria_tipo_id');?>

							</div>
						</div>
					</div>

						<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">Caminhao rastreado</label>

								<?php echo $this->Form->input('caminhao_rastreado');?>




							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label">valor do lance inicial</label>
								<span class="required" aria-required="true">*</span>

								<?php echo $this->Form->input('valor_lance_inicial');?>

							</div>
						</div>
					</div>

						<div class="row">
							<div class="col-md-6">
							<div class="form-group">

								<label class="control-label">tempo finalizar lance</label>

								<?php echo $this->Form->input('tempo_para_finalizar_lance');?>




							</div>
						</div>
					
					</div>


	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lances'), array('action' => 'index')); ?></li>
	</ul>
</div>
