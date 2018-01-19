<div class="ofertas form">
<?php echo $this->Form->create('Oferta'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Oferta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('lance_id');
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Oferta.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Oferta.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index')); ?></li>
	</ul>
</div>
