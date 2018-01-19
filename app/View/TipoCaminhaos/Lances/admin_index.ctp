<div class="lances index">
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
			<th><?php echo $this->Paginator->sort('endereco_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('endereco_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('cidade_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('data_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('data_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone_origem'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone_destino'); ?></th>
			<th><?php echo $this->Paginator->sort('destino_tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('agendado'); ?></th>
			<th><?php echo $this->Paginator->sort('peso_carga'); ?></th>
			<th><?php echo $this->Paginator->sort('volume_carga'); ?></th>
			<th><?php echo $this->Paginator->sort('caminhao_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('produto'); ?></th>
			<th><?php echo $this->Paginator->sort('carroceria_tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caminhao_rastreado'); ?></th>
			<th><?php echo $this->Paginator->sort('valor_lance_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('tempo_para_finalizar_lance'); ?></th>
			<th><?php echo $this->Paginator->sort('status_lance'); ?></th>
			<th><?php echo $this->Paginator->sort('user_name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lances as $lance): ?>
	<tr>
		<td><?php echo h($lance['Lance']['id']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['endereco_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['cliente_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['endereco_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['cliente_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['cidade_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['cidade_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['estado_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['estado_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['data_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['data_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['telefone_origem']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['telefone_destino']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['destino_tipo']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['agendado']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['peso_carga']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['volume_carga']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['caminhao_tipo_id']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['produto']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['carroceria_tipo_id']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['caminhao_rastreado']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['valor_lance_inicial']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['tempo_para_finalizar_lance']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['status_lance']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['user_name']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['created']); ?>&nbsp;</td>
		<td><?php echo h($lance['Lance']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lance['Lance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lance['Lance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lance['Lance']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $lance['Lance']['id']))); ?>
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
				('Novo lance'),
				array('action'=>'add'),
				array('class' => 'btn btn-default','target'=>'' ));

			 ?>
</div>
