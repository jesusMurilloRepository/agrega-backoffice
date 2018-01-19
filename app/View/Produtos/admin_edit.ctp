<div class="produtos form">

	<div class="Produtos index">


			<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                        <!-- <a href="http://mobitap.com.br/agrega_backoffice/admin/produtos/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a> -->

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">Produtos</h2>

            </header>


		<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Editar Produtos'); ?>
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

					// $options['type'] ='file';

					$options1 = array(
						'label' => false,
						'class' => 'btn btn-primary',
						'action' => 'edit',

					);




 echo $this->Form->create('Produto',$options); ?>

	
					<div class="row">
							<div class="col-md-6">
							<div class="form-group">
					<label class="control-label">Nome do Produto</label>			
					<?php echo $this->Form->input('nome');?>
					</div>
				</div>
			</div></br>



<?php echo $this->Form->button('Editar',$options1); ?>

</div>
</div>
</div>