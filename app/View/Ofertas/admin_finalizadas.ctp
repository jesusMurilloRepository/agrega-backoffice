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


            <div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Ofertas Finalizadas'); ?>
					</h2>
				</div>



	<!-- <h2><?php echo __('Ofertas'); ?></h2> -->
	<div class="panel-body">

	 <div class="search-control-wrapper" style="margin-bottom: 20px;margin-top: 20px;">
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
            </div>


	<div class="table-responsive">
	<table class= "table mb-none" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
		
			<th><?php echo $this->Paginator->sort('Contrato'); ?></th>
			<th><?php echo $this->Paginator->sort('Vencedor'); ?></th>
			<th><?php echo $this->Paginator->sort('Valor Final'); ?></th>
			<th><?php echo $this->Paginator->sort('caminhao_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('Encerramento da Oferta'); ?></th>
		
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ofertas as $oferta): ?>
	<tr>
	
		
		<td><?php echo h($oferta['Oferta']['cod_contrato']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Usuario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Lance']['valor']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['veiculo_tipo_id']); ?>&nbsp;</td>
		<td><?php echo h($oferta['Oferta']['data_encerramento']); ?>&nbsp;</td>
	
	
	
	
		<td class="actions">
			<!-- <?php echo $this->Html->link(__('View'), array('action' => 'ofertas_finalizadas/view', $oferta['Oferta']['id'])); ?> -->
		
			
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

