<div class="tipoCaminhaos view">
<h2><?php echo __('Tipo Caminhao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoCaminhao['TipoCaminhao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipoCaminhao['TipoCaminhao']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Caminhao'), array('action' => 'edit', $tipoCaminhao['TipoCaminhao']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Caminhao'), array('action' => 'delete', $tipoCaminhao['TipoCaminhao']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipoCaminhao['TipoCaminhao']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Caminhaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Caminhao'), array('action' => 'add')); ?> </li>
	</ul>
</div>
