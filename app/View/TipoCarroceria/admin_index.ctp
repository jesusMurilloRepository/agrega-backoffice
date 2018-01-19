<div class="usuarios index">
	<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                         <a href="http://mobitap.com.br/agrega_backoffice/admin/TipoCarroceria/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a>

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">
						<?php echo __('Tipo de Carroceria'); ?>
					</h2>

            </header>
             <?php echo $this->Session->flash(); ?>

	<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Todas Carrocerias'); ?>
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
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoCarroceria as $tipoCarrocerium): ?>
	<tr>
		<td><?php echo h($tipoCarrocerium['TipoCarrocerium']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoCarrocerium['TipoCarrocerium']['nome']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoCarrocerium['TipoCarrocerium']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoCarrocerium['TipoCarrocerium']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipoCarrocerium['TipoCarrocerium']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
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


