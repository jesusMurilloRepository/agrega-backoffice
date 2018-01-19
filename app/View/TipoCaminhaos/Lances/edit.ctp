<div class="lances form">
<?php echo $this->Form->create('Lance'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lance'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('endereco_origem');
		echo $this->Form->input('cliente_origem');
		echo $this->Form->input('endereco_destino');
		echo $this->Form->input('cliente_destino');
		echo $this->Form->input('cidade_origem');
		echo $this->Form->input('cidade_destino');
		echo $this->Form->input('estado_origem');
		echo $this->Form->input('estado_destino');
		echo $this->Form->input('data_origem');
		echo $this->Form->input('data_destino');
		echo $this->Form->input('telefone_origem');
		echo $this->Form->input('telefone_destino');
		echo $this->Form->input('destino_tipo');
		echo $this->Form->input('agendado');
		echo $this->Form->input('peso_carga');
		echo $this->Form->input('volume_carga');
		echo $this->Form->input('caminhao_tipo_id');
		echo $this->Form->input('produto');
		echo $this->Form->input('carroceria_tipo_id');
		echo $this->Form->input('caminhao_rastreado');
		echo $this->Form->input('valor_lance_inicial');
		echo $this->Form->input('tempo_para_finalizar_lance');
		echo $this->Form->input('status_lance');
		echo $this->Form->input('user_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lance.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Lance.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Lances'), array('action' => 'index')); ?></li>
	</ul>
</div>
