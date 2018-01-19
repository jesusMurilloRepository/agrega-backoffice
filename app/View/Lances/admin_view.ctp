<div class="ofertas view">
<h2><?php echo __('Oferta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lance Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['lance_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario Id'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['usuario_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($oferta['Oferta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oferta'), array('action' => 'edit', $oferta['Oferta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oferta'), array('action' => 'delete', $oferta['Oferta']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $oferta['Oferta']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ofertas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oferta'), array('action' => 'add')); ?> </li>
	</ul>
</div>
