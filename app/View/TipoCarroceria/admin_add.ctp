<div class="carroceria form">
<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                         <a href="http://mobitap.com.br/agrega_backoffice/admin/clientes/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a>

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">
						<?php echo __('Tipo de Carroceria'); ?>
					</h2>

            </header>
	<div class="row">
		<div class="col-md-12">
			<div class="panel">
				
            
				<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Cadastrar Nova'); ?>
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



					echo $this->Form->create('TipoCarrocerium', $options);
					?>

	

					<div class="row">
							<div class="col-md-6">
							<div class="form-group">
					<label class="control-label">Tipo de Carroceria</label>


	<?php echo $this->Form->input('nome');?>
	
<br>
<?php echo $this->Form->button('Cadastrar',$options1); ?>


