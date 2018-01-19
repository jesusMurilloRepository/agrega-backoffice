<div class="tipoCarroceria view">
<h2><?php echo __('Tipo Carrocerium'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoCarrocerium['TipoCarrocerium']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipoCarrocerium['TipoCarrocerium']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Carrocerium'), array('action' => 'edit', $tipoCarrocerium['TipoCarrocerium']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Carrocerium'), array('action' => 'delete', $tipoCarrocerium['TipoCarrocerium']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipoCarrocerium['TipoCarrocerium']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Carroceria'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Carrocerium'), array('action' => 'add')); ?> </li>
	</ul>
</div>
