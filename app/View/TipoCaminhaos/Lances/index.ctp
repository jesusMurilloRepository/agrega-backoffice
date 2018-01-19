<div class="lances index">
	<h2><?php echo __('Lances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
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
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lance'), array('action' => 'add')); ?></li>
	</ul>
</div>
