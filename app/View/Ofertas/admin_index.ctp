<div class="ofertas index">

	<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                         <a href="http://mobitap.com.br/agrega_backoffice/admin/ofertas/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a>

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">
						<?php echo __('Ofertas'); ?>
					</h2>

            </header>

             <?php echo $this->Session->flash(); ?>
	<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Todas Ofertas'); ?>
					</h2>
				</div>
	<div class="panel-body">

<!-- 	 <div class="search-control-wrapper" style="margin-bottom: 20px;margin-top: 20px;">
              <form action="" method="get">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" name="buscar" value="">
                    <span class="input-group-btn">
                      <button class="btn btn-primary">Buscar</button>
                    </span>
                  </div>
                </div>
               

              </form>
            </div> -->


	<div class="table-responsive">
	<table class= "table mb-none" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
		
			<th><?php echo $this->Paginator->sort('cliente_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_destino'); ?></th>

			<!-- <th><?php echo $this->Paginator->sort('cidade_origem'); ?></th> -->
			<!-- <th><?php echo $this->Paginator->sort('cidade_destino'); ?></th> -->

			<th><?php echo $this->Paginator->sort('data_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('data_destino'); ?></th>

			<th><?php echo $this->Paginator->sort('peso_carga'); ?></th>
		
			<!-- <th><?php echo $this->Paginator->sort('volume_carga'); ?></th> -->

			<th><?php echo $this->Paginator->sort('caminhao_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('carroceria_tipo_id'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('produto'); ?></th> -->
		
			<!-- <th><?php echo $this->Paginator->sort('valor_lance_inicial'); ?></th> -->

			<th><?php echo $this->Paginator->sort('Encerramento da Oferta'); ?></th>
		
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ofertas as $oferta): ?>
	<tr>
	
		
		<td><?php echo h($oferta['Oferta']['cliente_origem']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['cliente_destino']); ?>&nbsp;</td>

		<!-- <td><?php echo h($oferta['Oferta']['cidade_origem']); ?>&nbsp;</td> -->
		<!-- <td><?php echo h($oferta['Oferta']['cidade_destino']); ?>&nbsp;</td> -->

		<td><?php echo h($oferta['Oferta']['data_origem']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['data_destino']); ?>&nbsp;</td>

		
		<td><?php echo h($oferta['Oferta']['peso_carga']); ?>&nbsp;</td>
		
		<!-- <td><?php echo h($oferta['Oferta']['volume_carga']); ?>&nbsp;</td> -->
		
		<td><?php echo h($oferta['Oferta']['veiculo_tipo_id']); ?>&nbsp;</td>

		<td><?php echo h($oferta['TipoCarrocerium']['nome']); ?>&nbsp;</td>
		<!-- <td><?php echo h($oferta['Produto']['nome']); ?>&nbsp;</td> -->
	

		<!-- <td><?php echo h($oferta['Oferta']['valor_lance_inicial']); ?>&nbsp;</td> -->
		<td><?php echo h($oferta['Oferta']['data_encerramento']); ?>&nbsp;</td>
	
	
	
	
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oferta['Oferta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oferta['Oferta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $oferta['Oferta']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
	<div class="panel-footer">
				<div class="dataTables_paginate paging_bs_normal">
				  <ul class="pagination">
				         <?php
				              echo $this->Paginator->prev(__('«'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
				              echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li'));
				              echo $this->Paginator->next(__('»'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
				          ?>
				      </ul>
				</div>

			</div>


