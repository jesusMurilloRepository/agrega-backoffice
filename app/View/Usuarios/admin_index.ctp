<div class="usuarios index">
	<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                         <a href="http://mobitap.com.br/agrega_backoffice/admin/usuarios/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a>

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">
						<?php echo __('Usuarios App'); ?>
					</h2>

            </header>

           <?php echo $this->Session->flash(); ?>
	<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Todos Usuarios'); ?>
					</h2>
				</div>
	<div class="panel-body">

<!-- 	 <div class="search-control-wrapper" style="margin-bottom: 20px;margin-top: 20px;">
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
 -->

			<div class="table-responsive">
	<table class= "table mb-none" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('Nome'); ?></th>
			<th><?php echo $this->Paginator->sort('CPF'); ?></th>
	
		
			<th><?php echo $this->Paginator->sort('cidade'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>

			<th><?php echo $this->Paginator->sort('Cadastrado em'); ?></th>
			<th><?php echo $this->Paginator->sort('Último Login'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
	
		<td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['cidade']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['estado']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['celular']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>

		<td><?php  echo h($usuario['Usuario']['created']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['last_login']); ?>&nbsp;</td>
		
		<td class="actions">
			
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuario['Usuario']['id']))); ?>
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


