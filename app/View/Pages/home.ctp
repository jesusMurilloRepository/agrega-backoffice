<?php 






?>






<div class="row">

						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
									<div class="panel-body">
           <div class="widget-summary">
            <div class="widget-summary-col widget-summary-col-icon">
             
            </div>
            <div class="widget-summary-col">
             <div class="summary">
              <h4 class="title">Ofertas Ativas</h4>
<h2><?php echo $ofertas_ativas ?></h2>
              
             </div>
             
            </div>
           </div>
          </div>
										
									</section>
								</div>

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
           <div class="widget-summary">
            <div class="widget-summary-col widget-summary-col-icon">
             
            </div>
            <div class="widget-summary-col">
             <div class="summary">
              <h4 class="title">Usuários do App</h4>
<h2>
	<?php print_r($usuariosApp) ?>
		
	</h2>
              
             </div>
             
            </div>
           </div>
          </div>
									</section>
								</div>
								

							</div>
						<!-- 	<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Empresas Cadastradas</h4>
														<div class="info">
															<strong class="amount"><?= !empty($home_dados["empresas"]) ? $home_dados["empresas"] : "" ?></strong>
														</div>
													</div>

													<div class="summary-footer">
														<a href = "<?php echo $this->base ?>/admin/empresas" class="text-muted text-uppercase">(ver)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quaternary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Confirmações pendentes</h4>
														<div class="info">
															<strong class="amount"><?= !empty($home_dados["pedidos_pendentes"]) ? $home_dados["pedidos_pendentes"] : "" ?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(ver)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div> -->
						</div>
					</div>
