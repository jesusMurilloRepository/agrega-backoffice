<?php
App::uses('AppController', 'Controller');
/**
 * lances Controller
 *
 * @property Lance $Lance
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class LancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

	public $uses = array('Lance','Oferta');

	public function beforeFilter(){
	    parent::beforeFilter();

	     header("Access-Control-Allow-Origin: *");
	     
	     $this->response->header(array(
	            'Access-Control-Allow-Origin' => '*',
	            'Content-Type' => 'application/json'
	        )
	    );
	}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lance->recursive = 0;
		$this->set('lances', $this->Paginator->paginate());
	}



		public function api_vencedor() {

		if(!empty($this->request->query)){


			$lance_id = $this->request->query['lance'];

				$conditions = array(

				'conditions' => array(

					'Lance.lance_id' => $lance_id,

				)

			);

			

		$oferta = $this->Oferta->find('all',$conditions);


		// echo "<pre>";
		// print_r($oferta);
		echo json_encode($oferta);
		}


		exit();

	}



	public function api_minhasOfertas() {


		if(!empty($this->request->query)){


		$id_usuario = $this->request->query['usuario'];

		$conditions = array(

			'conditions' => array(

				'usuario_id' => $id_usuario,

			)

		);

		$lances = $this->Lance->find('all',$conditions);

		$total = count($lances);

			for ($i=0; $i <$total ; $i++) {

			$lance_id = $lances[$i]['Lance']['lance_id'];
				
			$list2 = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array('Lance.lance_id' => $lance_id,)

			));
			// echo "<pre>";
			// print_r($lance_id);

			$total2 = count($list2);
			for ($i2=0; $i2 < $total2 ; $i2++) { 
					
					if($list2[$i2]['Lance']['usuario_id'] == $id_usuario ){

						$posicao = $i2 + 1;
						$list2[$i2]['Posicao'] = $posicao.'/'.$total2; 
						$classifiaca = $list2[$i2]['Posicao'];
						$lances[$i]['classificacao'] = $classifiaca ;
						$lances[$i]['posicao'] = $posicao ;
					}


				}	

			 }

			echo json_encode($lances);


		}

		exit();
	}



	public function api_resultado() {


		if(!empty($this->request->query)){

			$lance_id  = $this->request->query['lance'];
			$usuario_id = $this->request->query['usuario'];
	


		$list = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array(
		           	'Lance.lance_id' => $lance_id,
					
           
        )

			));

		$total = count($list);
	

		if($list[0]['Lance']['usuario_id'] == $usuario_id){

		$result['resulta'] = 'vencedor';

		}else{


			$result['resulta'] = 'perdedor';
		}



		echo json_encode($result);
		exit();

	}
		


}
	public function api_tipo_oferta() {


		if($this->request->is('post')){
	
		$valor = $this->request->data['valor'];
		$valor1 = str_replace('.', '', $valor);
		$valor2 = str_replace(',', '.', $valor1);


		$this->request->data['valor'] = $valor2;

		$this->Lance->create();


		if($this->Lance->save($this->request->data)) {
			
		
		$oferta_id = $this->request->data['lance_id'];
		$usuario_id = $this->request->data['usuario_id'];




			$result["mensagem"] = "Lance cadastrado";
			
			$oferta = $this->Oferta->find('all',array(
            'conditions' => array(
		          	'Oferta.id' => $oferta_id,
         		)));

			 		$id_lance_win = $this->Lance->getLastInsertId();

			$this->Oferta->id = $oferta_id;

			$this->Oferta->save(array(

				'user_winner_id' => $usuario_id,
				'status_lance' => 'Finalizado',
				'id_lance_win' => $id_lance_win,
			));


				echo json_encode($oferta);
			// print_r($oferta);


			

		}else{ 

			
			$result = "Erro ao tentar cadastrar Lance";

		}



}
		// if(!empty($this->request->query)){

	

		// $id = $this->request->data['lance'];

		// $usuario_id = $this->request->data['usuario'];

		// $usuario_id = $this->request->data['usuario'];

		// $oferta = $this->Oferta->find('all',array(
  //           'conditions' => array(
		//           	'Oferta.id' => $id,
  //        		)));


		// echo "<pre>";
		// print_r($oferta);
 

	// 	$this->Oferta->id = $Oferta[0]['Oferta']['id'];
	// 	$this->Oferta->save(array(

	// 		'user_winner_id' => $usuario_id,
	// 		'status_lance' => 'Finalizado',

	// 	));



	// }	

		exit();

	}


	public function api_add() {


		if($this->request->is('post')){

			


			$valor1 = str_replace('.','',$this->request->data['valor']);
			$valorfinal = str_replace(',','.',$valor1);

			$this->request->data['valor'] = $valorfinal;
			
	
		

			$lance_id = $this->request->data['lance_id'];


					$valor = $this->request->data['valor'];

				$list = $this->Lance->find('all',array(

	            'order' => array('Lance.valor' => 'asc'),
	            'conditions' => array(
			          	'Lance.lance_id' => $lance_id,
	         		)

				));


				$oferta = $this->Oferta->find('all',array(
	          
	            'conditions' => array(
			          	'Oferta.id' => $lance_id,
	         		)

				));


			if(!empty($oferta)){

				 if($valor>=$oferta[0]['Oferta']['valor_lance_inicial']){


							$result['mensagem'] = 'Digite um lance válido';

							echo json_encode($result);
							exit();
						}

			}

			

		
			if(!empty($list)){
				

										
				
						if($valor>=$list[0]['Lance']['valor']){


										$result['mensagem'] = 'Digite um lance válido';
						}else{


								$this->Lance->create();

		if($this->Lance->save($this->request->data)) {
			

			$list = $this->Lance->find('all',array(

              'conditions' => array(
		      'Lance.lance_id' => $this->request->data['lance_id'],
			  'Lance.usuario_id'=> $this->request->data['usuario_id'],
     		   )
			));


			$result["mensagem"] = "Lance cadastrada";
			$result['user'] = $list;
			



				}else{ 

					
					$result = "Erro ao tentar cadastrar Lance";

				}



						}

						}

						else{




			$this->Lance->create();

		if($this->Lance->save($this->request->data)) {
			

			$list = $this->Lance->find('all',array(

              'conditions' => array(
		      'Lance.lance_id' => $this->request->data['lance_id'],
			  'Lance.usuario_id'=> $this->request->data['usuario_id'],
     		   )
			));


			$result["mensagem"] = "Lance cadastrada";
			$result['user'] = $list;
			



				}else{ 

					
					$result = "Erro ao tentar cadastrar Lance";

				}
		}
			}
		


		
		
	

		echo json_encode($result);
		
		exit();

		}
	
	

		public function api_list() {


		if(!empty($this->request->query)){

		$options['conditions'] = array(

			'lance_id' => $this->request->query['lance'],
			'usuario_id'=> $this->request->query['usuario'],
		);




		$list = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array(

		           	'Lance.lance_id' => $this->request->query['lance'],
					'Lance.usuario_id'=> $this->request->query['usuario'],
           
        )

			));
}
		if(!empty($list)){
		echo json_encode($list);
		exit();
		}else{
			// 1 - usuario não encontrado
		$result["Lance"] = "1";
		echo json_encode($result);
		exit();

	}
		


}


public function api_VerificaLance() {


		if(!empty($this->request->query)){

	

			$lance_id = $this->request->query['lance'];
			$usuario_id = $this->request->query['usuario'];
	




		$list = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array(

		           	'Lance.lance_id' => $this->request->query['lance'],
					'Lance.usuario_id'=> $this->request->query['usuario'],
           
        )

			));
}
		if(!empty($list)){
		
		$total = count($list);
		// echo($usuario_id);
		$validate = "";
		for ($i=0; $i <$total ; $i++) { 
			// echo "<pre>";
			// print_r($list[$i]['Lance']['usuario_id']);

			if($list[$i]['Lance']['usuario_id'] == $usuario_id){

				$list['retorno'] = 'lance existente';
			}
		}
		}else{
			// 1 - usuario não encontrado
		$result["retorno"] = "sem lance";

		echo json_encode($result);
		exit();

	}
		echo json_encode($list);
		
		exit();


}

		public function api_list2() {


		if(!empty($this->request->query)){

		$options['conditions'] = array(

			'lance_id' => $this->request->query['lance'],
		);




		$list = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array(
		          	'Lance.lance_id' => $this->request->query['lance'],
         		)

			));
		if(!empty($list)){

		echo json_encode($list);
			
		}
	
	else{
		$list['erro'] = 'sem lances';					
		echo json_encode($list);

	}

}

		exit();
}


	public function api_edit($id=null) {
	
			
	

		if ($this->request->is('post')) {


			$valor1 = str_replace('.','',$this->request->data['valor']);
			$valorfinal = str_replace(',','.',$valor1);
			$this->request->data['valor'] = $valorfinal;

			$id = $this->request->data['id'];

			$lance_id = $this->request->data['lance_id'];


			$valor = $this->request->data['valor'];


				$list = $this->Lance->find('all',array(
	            'order' => array('Lance.valor' => 'asc'),
	            'conditions' => array(
			          	'Lance.lance_id' => $lance_id,
	         		)

				));

		$usuario_id = $this->request->data['usuario_id'];

			if($usuario_id == $list[0]['Lance']['usuario_id'] )
		{

				$result['msg'] = 'primeiro';
				
				echo json_encode($result);

				exit();


		}
		
		// if($valor<=$list[0]['Lance']['valor']){


		// 		$diferenca = $list[0]['Lance']['valor'] - $valor;
				
		// 		if($diferenca < 50 ){

		// 			$lancemin = $list[0]['Lance']['valor'] - 50;

		// 			$result['lancemin'] = "Lance mínimo é de ".$lancemin;
		// 			$result['diferenca'] = $diferenca;
		// 			$result['erro'] = "lance minimo";

						
		// 		}else{

				
		// 	if($this->Lance->save($this->request->data)) {

			

		// 	$result["mensagem"] = "lance atualizado";
		
		// 	// $result["id"] = $this->Usuario->getLastInsertId();



		// }else{

			
		// 	$result["erro"] = "Erro ao tentar atualizar Lance";

		// }


		// 		}
		// }else{



			if($valor>=$list[0]['Lance']['valor']){


							$result['mensagem'] = 'Digite um lance válido';

						}else{




			if($this->Lance->save($this->request->data)) {
			

			$result["mensagem"] = "lance atualizado";
			// $result["id"] = $this->Usuario->getLastInsertId();



		}else{

			
			$result["erro"] = "Erro ao tentar atualizar Lance";

			}
		}
			// }


		

		// $list = $this->Lance->find('all');

		echo json_encode($result);
		exit();
	
	}


}


	public function api_edit_automatico($id=null) {
	
			
	

		if ($this->request->is('post')) {




			$id = $this->request->data['id'];

			$lance_id = $this->request->data['lance_id'];



				$list = $this->Lance->find('all',array(
	            'order' => array('Lance.valor' => 'asc'),
	            'conditions' => array(
			          	'Lance.lance_id' => $lance_id,
	         		)

				));



			$valor = $list[0]['Lance']['valor'];


			$porcent = $valor*0.01;


			$valor = $valor - $porcent;
		
		
			$this->request->data['valor'] = $valor;


		$usuario_id = $this->request->data['usuario_id'];

			if($usuario_id == $list[0]['Lance']['usuario_id'] )
		{

				$result['msg'] = 'primeiro';
				
				echo json_encode($result);

				exit();


		}
		
		// if($valor<=$list[0]['Lance']['valor']){


		// 		$diferenca = $list[0]['Lance']['valor'] - $valor;
				
		// 		if($diferenca < 50 ){

		// 			$lancemin = $list[0]['Lance']['valor'] - 50;

		// 			$result['lancemin'] = "Lance mínimo é de ".$lancemin;
		// 			$result['diferenca'] = $diferenca;
		// 			$result['erro'] = "lance minimo";

						
		// 		}else{

				
		// 	if($this->Lance->save($this->request->data)) {

			

		// 	$result["mensagem"] = "lance atualizado";
		
		// 	// $result["id"] = $this->Usuario->getLastInsertId();



		// }else{

			
		// 	$result["erro"] = "Erro ao tentar atualizar Lance";

		// }


		// 		}
		// }else{



			if($valor>=$list[0]['Lance']['valor']){


							$result['mensagem'] = 'Digite um lance válido';

						}else{




			if($this->Lance->save($this->request->data)) {
			

			$result["mensagem"] = "lance atualizado";
			// $result["id"] = $this->Usuario->getLastInsertId();



		}else{

			
			$result["erro"] = "Erro ao tentar atualizar Lance";

			}
		}
			// }


		

		// $list = $this->Lance->find('all');

		echo json_encode($result);
		exit();
	
	}


}


	public function api_ListaOfertas3() {


				// if(!empty($this->request->query)){
				
				// $lance_id = $this->request->query['lance'];


				$list_ofertas = $this->Oferta->find('all',array(

				'limit' => '3',
				'conditions' => array('status_lance' => 'Ativo',)

				));

			// }

			echo json_encode($list_ofertas);

		exit();

	}



	public function api_ListaOfertas6() {


				// if(!empty($this->request->query)){
				
				// $lance_id = $this->request->query['lance'];


				$list_ofertas = $this->Oferta->find('all',array(

				'limit' => '6',
				'conditions' => array('status_lance' => 'Ativo',)

				));

			// }

			echo json_encode($list_ofertas);

		exit();

	}




	public function api_classifica() {

			if(!empty($this->request->query)){


		
				$lance_id = $this->request->query['lance'];
				$usuario_id =  $this->request->query['usuario'];


				$list_todos = $this->Lance->find('all',array(

					'conditions' => array('Lance.lance_id' => $lance_id)


				));

				$total1 = count($list_todos);
				// echo "<pre>";
				// print_r($total1);
				// exit();


		// $options['conditions'] = array(

		// 	'lance_id' => $this->request->query['lance'],
		// 	'usuario_id'=> $this->request->query['usuario'],
		// );

		$list = $this->Lance->find('all',array(
			'limit'=> '6',
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array('Lance.lance_id' => $lance_id,)

			));
		}

			$total = count($list);
				// echo($usuario_id);
			$validate = "";
			for ($i=0; $i <$total ; $i++) { 
			$list[$i]['posicao'] = $i+1 ;
			
			$valorinicial = $list[0]['Lance']['valor'];
			// echo "<pre>";
			// print_r($list[$i]);
			if($i == 0){
			$list[$i]['porcentagem'] =  "-";
				}
				if($i > 0){
					// $valorinicial
					// echo number_format("1000000",2)."<br>";
					$div = $list[$i]['Lance']['valor'] / $valorinicial;

					$list[$i]['div'] = $div;

					$sub = number_format($div, 3);

					// $sub = round($div,3);
					$result = ($sub-1)*100 ;
					// $resultF = number_format($result, 2);

					// $list[$i]['porcentagem'] = substr($result, -1);
					$list[$i]['porcentagem'] = $result;

					 // substr($resut,0,-1); ; 
					// print_r($teste);
				}

				if($list[$i]['Lance']['usuario_id'] == $usuario_id){

					//1 = esta entre os 6 primeiros	
					$validate = "1";

					$list[$i]['user'] = "Você" ;
					$list[$i]['posicao'] = $i+1 ;
					$list[$i]['total'] = $total1 ;
				}

		 }


		// foreach ($list as $value) {
		// 	echo($value);
		// }

		 if($validate == '1'){
		 	// echo "<pre>";
		 	// print_r($list);

		
		 echo json_encode($list);
		 	
		 }else{

		 	// echo "nao encontrou";

		 	$list_completa = $this->Lance->find('all',array(			
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array('Lance.lance_id' => $lance_id,)

			));


		 // echo "<pre>";
		 // echo "comeca aqui";
		// print_r($list_completa);

			$total2 = count($list_completa);
			// debug($total2);
			for ($i=0; $i < $total2 ; $i++) { 
				
					// print_r($list_completa[$i]);
				if($list_completa[$i]['Lance']['usuario_id'] == $usuario_id){

					
					// echo "igual";

					$registro = $list_completa[$i];
					$registro['posicao'] = $i+1;
					$registro['user'] = "você" ;

					// $registro['porcentagem'] = $valorinicial/$list_completa[$i]['Lance']['valor'];


					$div1 = $list_completa[$i]['Lance']['valor'] / $valorinicial;

					// $list[$i]['div'] = $div;

					$sub1 =  round($div1,3);

					// $sub = round($div,3);
					$result1 = ($sub-1)*100 ;
					// $resultF = number_format($result, 2);

					// $list[$i]['porcentagem'] = substr($result, -1);
					$registro['porcentagem'] = $result1;
					$list[$i]['total'] = $total1 ;




					// $div1 = $valorinicial/$list_completa[$i]['Lance']['valor'];
					// $sub1 = round($div1,3);
					// $result1 = (1-$sub1)*1000;
					// $registro['porcentagem'] = substr($result1,0,1);
					// $registro['porcentagem'] = (1-$sub1)*1000; 
					$list[6] = $registro;

				}


				

			}
		// echo json_encode($list_completa);

	// print_r($list_completa);
	// $list[$i]['total'] = $total1 ;
	
	echo json_encode($list);
	// echo"<br>";
	// echo json_encode($registro);

		 }
		 
	exit();
	}


	public function api_finalizar(){


		if(!empty($this->request->query)){

		$options['conditions'] = array(

			'Lance.lance_id' => $this->request->query['lance'],
		);


		$list = $this->Lance->find('all',array(
            'order' => array('Lance.valor' => 'asc'),
            'conditions' => array(
		          	'Lance.lance_id' => $this->request->query['lance'],
         		)

			));
	}
 	// 	echo"<pre>";
 	// 	print_r($list);
		// exit();

 		$id_lance_win = $list[0]['Lance']['id'];


		$this->Oferta->id = $list[0]['Lance']['lance_id'];

		$this->Oferta->save(array(

			'user_winner_id' => $list[0]['Lance']['usuario_id'],
			'status_lance' => 'Finalizado',
			'id_lance_win' => $id_lance_win,

		));



	// echo "<pre>";
// print_r($list[0]);
exit();


}

	


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lance->exists($id)) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		$options = array('conditions' => array('Lance.' . $this->Lance->primaryKey => $id));
		$this->set('Lance', $this->Lance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lance->create();
			if ($this->Lance->save($this->request->data)) {
				$this->Flash->success(__('The Lance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Lance could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lance->exists($id)) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lance->save($this->request->data)) {
				$this->Flash->success(__('The Lance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Lance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lance.' . $this->Lance->primaryKey => $id));
			$this->request->data = $this->Lance->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Lance->id = $id;
		if (!$this->Lance->exists()) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lance->delete()) {
			$this->Flash->success(__('The Lance has been deleted.'));
		} else {
			$this->Flash->error(__('The Lance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {



		$data = date("Y/m/d"); 


		$year = date('o');
		$week = date('W');


		    $ts1 = strtotime($year.'W'.$week.'1');
		    $ts2 = strtotime($year.'W'.$week.'7');


		    $data_ini = date("Y/m/d", $ts1);

		  	$data_fim =  date("Y/m/d", $ts2);

		




			$sql = "SELECT * FROM ofertas WHERE created  BETWEEN 
         '$data_ini' AND '$data_fim' ";

         $teste = $this->Oferta->query($sql);
         $lances_semana = count($teste);



		$ofertas_finalizadas = $this->Oferta->find('all', array(

			'conditions' => array(
				'status_lance' => 'Finalizado',
			)

		));


		$ofertas_ativas = $this->Oferta->find('all', array(

			'conditions' => array(
				'status_lance' => 'Ativo',
			)

		));


		$ofertas_ativas1 = count($ofertas_ativas);
		$ofertas_finalizadas1 =count($ofertas_finalizadas);
		
	


		// $this->Oferta->recursive = 0;
		

		

        

         // debug($lances_semana);
       
         // exit();

		$this->Lance->recursive = 0;
		$this->set('lances', $this->Paginator->paginate());
		$this->set('lances_semana', $lances_semana);
		$this->set('ofertas_finalizadas', $ofertas_finalizadas1);
		$this->set('ofertas_ativas', $ofertas_ativas1);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {





		if (!$this->Lance->exists($id)) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		$options = array('conditions' => array('Lance.' . $this->Lance->primaryKey => $id));
		$this->set('Lance', $this->Lance->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Lance->create();
			if ($this->Lance->save($this->request->data)) {
				$this->Flash->success(__('The Lance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Lance could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Lance->exists($id)) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lance->save($this->request->data)) {
				$this->Flash->success(__('The Lance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Lance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lance.' . $this->Lance->primaryKey => $id));
			$this->request->data = $this->Lance->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Lance->id = $id;
		if (!$this->Lance->exists()) {
			throw new NotFoundException(__('Invalid Lance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lance->delete()) {
			$this->Flash->success(__('The Lance has been deleted.'));
		} else {
			$this->Flash->error(__('The Lance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
