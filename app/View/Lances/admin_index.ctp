<style type="text/css">
	

	.inicialbul {
    background: rgba(0,0,0,.3);
       padding-top: 12px;
    -webkit-border-radius: 109px;
    -moz-border-radius: 109px;
    border-radius: 109px;
    text-align: center;
}

.titleinicialbul {
	color: #fff;
    font-size: 30px;
}

</style>
<div class="lances index">
	<header class="page-header">


                    <div class="panel-actions">

                        <!-- <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a> -->

                         <!-- <a href="http://mobitap.com.br/agrega_backoffice/admin/lances/add" class="btadicionaradm panel-action"><i class="fa fa-plus"></i></a> -->

                        <a href="#modalAnim" id="modaladicionaradmlink" class="panel-action fa fa-plus modal-with-zoom-anim" style="display:none;"><i class="fa fa-plus"></i></a>

                    </div>

                    <h2 class="panel-title">
						<?php echo __('Lances'); ?>
					</h2>

            </header>
 <?php echo $this->Session->flash(); ?>
       <div class="row">
       	
       		 <div class="col-md-4">
                            <div class="inicialbul">
                                <p class="titleinicialbul"><?php echo $lances_semana ?></p>
                                <p style="color:#fff">Total de Ofertas da Semana</p>
                            </div>
                        </div>

                            <div class="col-md-4">
                            <div class="inicialbul">
                                <p class="titleinicialbul"><?php echo $ofertas_ativas ?></p>
                                <p style="color:#fff">Ofertas em andamento</p>
                            </div>
                        </div>

                            <div class="col-md-4">
                            <div class="inicialbul">
                                <p class="titleinicialbul"><?php echo $ofertas_finalizadas ?></p>
                                <p style="color:#fff">Ofertas Finalizados</p>
                            </div>
       </div>
       </div>     
    


	<div class="panel-heading">
					<h2 class="panel-title">
						<?php echo __('Lances das ofertas em andamento'); ?>
					</h2>
				</div>


	<div class="panel-body">

	<!--  <div class="search-control-wrapper" style="margin-bottom: 20px;margin-top: 20px;">
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
            </div> -->


	<div class="table-responsive">
	<table class= "table mb-none" cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
			<th><?php echo $this->Paginator->sort('Código Oferta'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('Data do Lance'); ?></th>
			<!-- <th><?php echo $this->Paginator->sort('modified'); ?></th> -->
			<!-- <th class="actions"><?php echo __('Actions'); ?></th> -->
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lances as $Lance): ?>
	<tr>
		<td><?php echo h($Lance['Oferta']['cod_contrato']); ?>&nbsp;</td>
		<td><?php echo h($Lance['Usuario']['nome']); ?>&nbsp;</td>
	<!-- 	<td><?php echo h($Lance['Lance']['lance_id']); ?>&nbsp;</td> -->
		<td><?php echo h($Lance['Lance']['valor']); ?>&nbsp;</td>
		<td><?php echo h($Lance['Lance']['created']); ?>&nbsp;</td>
		<!-- <td><?php echo h($Lance['Lance']['modified']); ?>&nbsp;</td> -->
		<!-- <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $Lance['Lance']['id'])); ?>
			
		</td> -->
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
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
