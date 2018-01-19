<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipoCaminhaos as $tipoCaminhao): ?>
	<tr>
		<td><?php echo h($tipoCaminhao['TipoCaminhao']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoCaminhao['TipoCaminhao']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoCaminhao['TipoCaminhao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoCaminhao['TipoCaminhao']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoCaminhao['TipoCaminhao']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipoCaminhao['TipoCaminhao']['id']))); ?>
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

<div class="actions">
	<h3><?php echo __('Ações'); ?></h3>
	<?php

			echo $this->Html->link(
				('Novo Usuário'),
				array('action'=>'add'),
				array('class' => 'btn btn-default','target'=>'' ));

			 ?>
</div>
