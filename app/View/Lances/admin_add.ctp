<div class="lance form">
<?php echo $this->Form->create('Lance'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Lance'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Lances'), array('action' => 'index')); ?></li>
	</ul>
</div>
