<div class="tipoCaminhaos form">
<?php echo $this->Form->create('TipoCaminhao'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Caminhao'); ?></legend>
	<?php
		echo $this->Form->input('nome');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Caminhaos'), array('action' => 'index')); ?></li>
	</ul>
</div>
