<?php

App::import('Vendor', 'Twilio', array('file' => 'Twilio' . DS . 'autoload.php'));
use Twilio\Rest\Client;
App::uses('AppController', 'Controller');
/**
 * Ofertas Controller
 *
 * @property Oferta $Oferta
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class OfertasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
	public $uses = array('Oferta', 'Produto','TipoCarrocerium','Usuario','Cliente','Produto','TipoCaminhao');

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
	public function api_teste(){

			$sid = "AC8b7f68ca96e8e1d80488ece04a4531f7";
			$token = "6324fff070f1faae98c63700a9e37714";

			$client = new Client($sid, $token);
		
			$teste = $client->account->messages->create(
				    '+55-01599788-0780',
				    array(

				        'from' => '+1-509-956-4310',
				        'body' => "Uma nova senha foi gerada, Anote Sua Senha"
				    )
				);

	if($teste->IsError){

		echo($teste->ErrorMessage);
	}else{

		echo'sent sms';
	}

exit();
}

	public function api_produtos(){

	$list = $this->Produto->find('list');

	echo json_encode($list);

	exit();
	}


	public function api_caminhoes(){


	$list = $this->TipoCarrocerium->find('list');

	

	// $list = $this->TipoCaminhao->find('list');
	
	echo json_encode($list);

	exit();
	}

public function api_filtro_oferta(){

	$q = $this->request->query;


	// $teste = explode(",",$q['produtos']);
	// 	print_r($teste);
	// 	exit();


		$options['conditions']['AND']['Oferta.estado_origem LIKE'] = "%".$q['estado_origem']."%";
		$options['conditions']['AND']['Oferta.cidade_origem LIKE'] = "%".$q['cidade_origem']."%";

		$options['conditions']['AND']['Oferta.estado_destino LIKE'] = "%".$q['estado_destino']."%";
		$options['conditions']['AND']['Oferta.cidade_destino LIKE'] = "%".$q['cidade_destino']."%";

		$options['conditions']['AND']['Oferta.produto_id LIKE'] = "%".$q['produtos']."%";



		$options['conditions']['AND']['Oferta.carroceria_tipo_id LIKE'] = "%".$q['caminhao']."%";


		if($q['leilao'] != '' && $q['oferta'] !=''){


		$options['conditions']['AND']['Oferta.tipo_lance LIKE'] = "%";

		}else if($q['leilao'] != '' ){

		$options['conditions']['AND']['Oferta.tipo_lance LIKE'] = "%".$q['leilao']."%";
			
		}else if($q['oferta'] !=''){

		$options['conditions']['AND']['Oferta.tipo_lance LIKE'] = "%".$q['oferta']."%";
			
		}

		

		$usuario_id = $q['usuario'];
		$outros = $q['outros']; 
		// echo "<pre>";
			
			

		if(!empty($outros)){

			$ofertas = $this->Oferta->find('all',$options);

		

		}else{


		$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			

		$options['conditions']['AND']['Oferta.veiculo_tipo_id LIKE'] = "%".$tipo_veiculo."%";
		$options['conditions']['AND']['Oferta.carroceria_tipo_id LIKE'] = "%".$tipo_carroceria."%";

			$ofertas = $this->Oferta->find('all',$options);

		}

		
		echo json_encode($ofertas);
		// print_r($ofertas);
				exit();
}


	public function api_filtro_destino(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			$estado_origem = $this->request->data['estado_origem'];
			$cidade_origem = $this->request->data['cidade_origem'];

			$estado_destino = $this->request->data['estado_destino'];
			$cidade_destino = $this->request->data['cidade_destino'];

			$caminhao = $this->request->data['caminhao'];
			$produtos = $this->request->data['produtos'];
			$outros = $this->request->data['outros'];


			if(!empty($outros)){



				
				$conditions = array('conditions' => array(

				
				'estado_destino' => $estado_destino,
				'cidade_destino' => $cidade_destino,
				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',
				// 'veiculo_tipo_id' => $tipo_veiculo,
				// 'carroceria_tipo_id' => $tipo_carroceria,

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}


		public function api_filtro_destino1(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			

			$estado_destino = $this->request->data['estado_destino'];
			$cidade_destino = $this->request->data['cidade_destino'];

			
			$outros = $this->request->data['outros'];


			if(!empty($outros)){



				
				$conditions = array('conditions' => array(

				
				'estado_destino' => $estado_destino,
				'cidade_destino' => $cidade_destino,
				
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}

	public function api_filtro_origem(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			$estado_origem = $this->request->data['estado_origem'];
			$cidade_origem = $this->request->data['cidade_origem'];

			$estado_destino = $this->request->data['estado_destino'];
			$cidade_destino = $this->request->data['cidade_destino'];


			$outros = $this->request->data['outros'];

			$caminhao = $this->request->data['caminhao'];
			$produtos = $this->request->data['produtos'];


			if(!empty($outros)){



				
				$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				
				'veiculo_tipo_id' => $tipo_veiculo,
				'carroceria_tipo_id' => $tipo_carroceria,
				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				echo json_encode($ofertas);
				exit();


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}


		public function api_filtro_origem1(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			$estado_origem = $this->request->data['estado_origem'];
			$cidade_origem = $this->request->data['cidade_origem'];

		


			$outros = $this->request->data['outros'];

		


			if(!empty($outros)){



				
				$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				
				'veiculo_tipo_id' => $tipo_veiculo,
				'carroceria_tipo_id' => $tipo_carroceria,
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				echo json_encode($ofertas);
				exit();


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}




	public function api_filtro(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			$estado_origem = $this->request->data['estado_origem'];
			$cidade_origem = $this->request->data['cidade_origem'];

			$estado_destino = $this->request->data['estado_destino'];
			$cidade_destino = $this->request->data['cidade_destino'];


			$outros = $this->request->data['outros'];

			$caminhao = $this->request->data['caminhao'];
			$produtos = $this->request->data['produtos'];


			if(!empty($outros)){

				$conditions = array('conditions' => array(

				
				'Oferta.estado_origem' => $estado_origem,
				'Oferta.cidade_origem' => $cidade_origem,
				'Oferta.estado_destino' => $estado_destino,
				'Oferta.cidade_destino' => $cidade_destino,

				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				'estado_destino' => $estado_destino,
				'cidade_destino' => $cidade_destino,
				'Oferta.produto_id LIKE' => $produtos.'%',
				'Oferta.carroceria_tipo_id LIKE' => $caminhao.'%',
				// 'carroceria_tipo_id' => '3', s

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				// echo json_encode($ofertas);
				// exit();


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}







		public function api_filtro1(){

		if ($this->request->is('post')) {

			$usuario_id = $this->request->data['usuario'];
			
			$estado_origem = $this->request->data['estado_origem'];
			$cidade_origem = $this->request->data['cidade_origem'];

			$estado_destino = $this->request->data['estado_destino'];
			$cidade_destino = $this->request->data['cidade_destino'];


			$outros = $this->request->data['outros'];



			if(!empty($outros)){

				$conditions = array('conditions' => array(

				
				'Oferta.estado_origem' => $estado_origem,
				'Oferta.cidade_origem' => $cidade_origem,
				'Oferta.estado_destino' => $estado_destino,
				'Oferta.cidade_destino' => $cidade_destino,

				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

			}else{



				
				$conditions_user = array('conditions' => array(
		
				'Usuario.id' => $usuario_id,

				) 
			);


			$usuario = $this->Usuario->find('all',$conditions_user);


			$tipo_veiculo = $usuario['0']['Usuario']['tipo_veiculo'];
			$tipo_carroceria = $usuario['0']['Usuario']['tipo_carroceria'];

			$conditions = array('conditions' => array(

				
				'estado_origem' => $estado_origem,
				'cidade_origem' => $cidade_origem,
				'estado_destino' => $estado_destino,
				'cidade_destino' => $cidade_destino,
				

				) 
			);


			$ofertas = $this->Oferta->find('all',$conditions);

				// echo json_encode($ofertas);
				// exit();


			}


			
			// 	echo "<pre>";
			// print_r($usuario);
					
			

			if(!empty($ofertas)){

				// echo "<pre>";
				echo json_encode($ofertas);
			// print_r($ofertas);	
			}else{
				// echo "<pre>";
				$resul['msg'] = 'nenhuma oferta';
				echo json_encode($resul);

			}
			
		}

		exit();

	}

public function api_contratos(){

	if(!empty($this->request->query)){

		$usuario_id = $this->request->query['usuario'];

	

		$conditions = array('conditions' => array(
			'user_winner_id' => $usuario_id,
			) 
		);

		$ofertas = $this->Oferta->find('all',$conditions);
		
		
	

	}


		
		if(!empty($ofertas)){

			echo json_encode($ofertas);

		}else{

			$result['erro'] = "sem contrato";

			echo json_encode($result);

		}

	exit();

}



public function api_list(){

			
	if(!empty($this->request->query)){


		// $this->Paginator->settings = array('limit' => 5);

		$conditions =  array('conditions' => array(
			'Usuario.id' => $this->request->query['usuario'],
		) );

		$usuario = $this->Usuario->find('first',$conditions);

		// print_r($usuario);
		// exit();
		// $origem_favorito = $usuario['Usuario']['origem_favorito'];
		// $destino_favorito = $usuario['Usuario']['destino_favorito'];

			if(!empty($origem_favorito) && !empty($destino_favorito) ){

				$conditions2 = array('conditions' => array(
					'estado_origem' => $origem_favorito,
					'estado_destino' => $destino_favorito,
				) );


				$this->Paginator->settings = array('limit' => 10,$conditions2);

			    $list = $this->Paginator->paginate('Oferta');




				// $list = $this->Oferta->find('all',$conditions2);

			 if(empty($list)){

			 	$list = $this->Oferta->find('all');
				// $list = $this->Paginator->paginate('Oferta');
			 }

				
			}else{
			 	$list = $this->Oferta->find('all');
				// $list = $this->Paginator->paginate('Oferta');
				
			}
			// debug($list);
	echo json_encode($list);
	}

	 exit();





}

	public function index() {
		$this->Oferta->find('all');
		exit();
		$this->Oferta->recursive = 0;
		$this->set('ofetas', $this->Paginator->paginate());

	}

	public function api_paginacao() {
		
		$ofertas = $this->Paginator->paginate();

		foreach ($ofertas as $key => $value) {
			# code...
		echo"<pre>";
		print_r($value['Oferta']['id']);
		}
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
		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid Oferta'));
		}
		$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
		$this->set('Oferta', $this->Oferta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Oferta->create();
			if ($this->Oferta->save($this->request->data)) {
				$this->Flash->success(__('The Oferta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Oferta could not be saved. Please, try again.'));
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
		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid Oferta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Oferta->save($this->request->data)) {
				$this->Flash->success(__('The Oferta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Oferta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
			$this->request->data = $this->Oferta->find('first', $options);
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
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid Oferta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oferta->delete()) {
			$this->Flash->success(__('The Oferta has been deleted.'));
		} else {
			$this->Flash->error(__('The Oferta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		// echo '<pre>';
		// print_r($this->Oferta->find('all'));
		// exit();

		$this->Oferta->recursive = 0;
		$this->set('ofertas', $this->Paginator->paginate());
		// echo'<pre>';
		// print_r($this->Paginator->paginate());
		// exit();
	}



	public function admin_finalizadas() {


		$ofertas = $this->Oferta->find('all', array(

			'conditions' => array(
				'status_lance' => 'Finalizado'
			)

		));

		// debug($ofertas);
		// exit();


		// $this->Oferta->recursive = 0;
		$this->set('ofertas', $ofertas);

	}



/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid Oferta'));
		}
		$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
		$this->set('Oferta', $this->Oferta->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {



		$arrayOptions = array(
			'Sim' => 'Sim',
			'Não' => 'Não',
			 );

		$agendados = array(
			'Sim' => 'Sim',
			'Não' => 'Não',
			 );

		$TipoVeiculo = array(
			'Truck' => 'Truck',
			'Carreta' => 'Carreta',
			 );

		$TipoOferta = array(
			'Leilão' => 'Leilão',
			'Oferta' => 'Oferta',
			 );

		$und_medidas = array(
			'Tonelada' => 'Tonelada',
			'Kg' => 'Kg',
			 );

		$clientes = $this->Cliente->find('list');
		$produtos = $this->Produto->find('list');

		$carrocerias = $this->TipoCarrocerium->find('list');

		// debug($produtos);
		// debug($carrocerias);

		// exit();


		// $this->set('result',$result);

		$this->set('und_medidas',$und_medidas);
		$this->set('TipoOferta',$TipoOferta);
		$this->set('carrocerias',$carrocerias);
		$this->set('clientes',$clientes);
		$this->set('produtos',$produtos);
		$this->set('TipoVeiculo',$TipoVeiculo);
		$this->set('agendados',$agendados);
		$this->set('arrayOptions',$arrayOptions);

		if ($this->request->is('post')) {


		// debug($this->request->data);
		$peso = $this->request->data['Oferta']['peso_carga'];

		$und = $this->request->data['Oferta']['und_medida'];

		$contrato = rand(1, 10);
		// debug($this->request->data['Oferta']['peso_carga']);
		// debug($this->request->data['Oferta']['und_medida']);

		$dados = array($peso,$und);
		$final = join(" ",$dados);
		// debug($peso);
		// debug($und);


		// debug($final);
		$data = (string) date("Y");
		// $data_new = date("Y", $data);

		// $this->request->data['Oferta']['data'] = $data;
		
		$codigo = (string) rand();

		$codigo_new = substr($codigo,-7);
		$contrato = "#".$codigo_new."/".$data;


		$this->request->data['Oferta']['cod_contrato'] = $contrato;

		// $this->request->data['Oferta']['contrato1'] = $data;
		// $this->request->data['Oferta']['contrato2'] = $codigo;


		$this->request->data['Oferta']['peso_carga'] = $final;
		// debug($this->request->data);
		// exit();
		// exit();

			$this->request->data['Oferta']['user_name'] = $this->Session->read("Usuarios.id");

			$cliente_origem1 = $this->request->data['Oferta']['cliente_origem'];
			$cliente_destino1 = $this->request->data['Oferta']['cliente_destino'];

			$conditions3 = array('conditions' => array('Cliente.id' => $cliente_origem1));

			$conditions4 = array('conditions' => array('Cliente.id' => $cliente_destino1));

			$cliente1 = $this->Cliente->find('all',$conditions3);


			$cliente2 = $this->Cliente->find('all',$conditions4);



			$this->request->data['Oferta']['cliente_origem'] = $cliente1[0]['Cliente']['nome'];
			$this->request->data['Oferta']['cliente_destino'] = $cliente2[0]['Cliente']['nome'];




			$valor1 = str_replace('.','',$this->request->data['Oferta']['valor_lance_inicial']);
			$valorfinal = str_replace(',','.',$valor1);

			$this->request->data['valor_lance_inicial'] = $valorfinal;




			// print_r($this->request->data);
			// exit();



			$this->Oferta->create();
			if ($this->Oferta->save($this->request->data)) {

				$this->Oferta->id = $this->Oferta->getLastInsertId();


				$this->Oferta->save(array('status_lance' => 'Ativo'));



				$this->Flash->success(__('Oferta Criada Com Sucesso'));

				return $this->redirect(array('action' => 'index'));

			} else {

			$errors = $this->Oferta->validationErrors;
			$this->set('ValidateAjay',$errors);


			$this->Flash->render($errors);

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

	
	public function admin_ofertas_finalizadas() {

	exit();

	}


	public function admin_edit($id = null) {

			

		if (!$this->Oferta->exists($id)) {
			throw new NotFoundException(__('Invalid Oferta'));
		}


		if ($this->request->is(array('post', 'put'))) {

			$this->request->data['Oferta']['id'] = $id;
			
			$cliente_origem1 = $this->request->data['Oferta']['cliente_origem'];
			$cliente_destino1 = $this->request->data['Oferta']['cliente_destino'];

			$conditions3 = array('conditions' => array('Cliente.id' => $cliente_origem1));

			$conditions4 = array('conditions' => array('Cliente.id' => $cliente_destino1));

			$cliente1 = $this->Cliente->find('all',$conditions3);


			$cliente2 = $this->Cliente->find('all',$conditions4);


			$this->request->data['Oferta']['cliente_origem'] = $cliente1[0]['Cliente']['nome'];
			$this->request->data['Oferta']['cliente_destino'] = $cliente2[0]['Cliente']['nome'];
			
 			if ($this->Oferta->save($this->request->data)) {
				$this->Flash->success(__('The Oferta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The Oferta could not be saved. Please, try again.'));
			}
		} else {

			$options = array('conditions' => array('Oferta.' . $this->Oferta->primaryKey => $id));
			$this->request->data = $this->Oferta->find('first', $options);
			// echo"<pre>";
			// print_r($this->request->data);
			// exit();
			$arrayOptions = array(
			'Sim' => 'Sim',
			'Não' => 'Não',
			 );

		$agendados = array(
			'Sim' => 'Sim',
			'Não' => 'Não',
			 );

		$TipoVeiculo = array(
			'Truck' => 'Truck',
			'Carreta' => 'Carreta',
			 );

		$TipoOferta = array(
			'Leilão' => 'Leilão',
			'Oferta' => 'Oferta',
			 );

		$und_medidas = array(
			'Tonelada' => 'Tonelada',
			'Kg' => 'Kg',
			 );

		$produtos = $this->Produto->find('list');
		$carrocerias = $this->TipoCarrocerium->find('list');

		$clientes = $this->Cliente->find('list');

		$this->set('und_medidas',$und_medidas);
		$this->set('TipoOferta',$TipoOferta);
		$this->set('carrocerias',$carrocerias);
		$this->set('clientes',$clientes);
		$this->set('produtos',$produtos);
		$this->set('TipoVeiculo',$TipoVeiculo);
		$this->set('agendados',$agendados);
		$this->set('arrayOptions',$arrayOptions);
			
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
		$this->Oferta->id = $id;
		if (!$this->Oferta->exists()) {
			throw new NotFoundException(__('Invalid Oferta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Oferta->delete()) {
			$this->Flash->success(__('The Oferta has been deleted.'));
		} else {
			$this->Flash->error(__('The Oferta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
