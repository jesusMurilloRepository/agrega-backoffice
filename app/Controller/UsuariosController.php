<?php

App::import('Vendor', 'Twilio', array('file' => 'Twilio' . DS . 'autoload.php'));
use Twilio\Rest\Client;
App::uses('AppController', 'Controller','Client');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
	public $uses = array('Usuario','TipoCarrocerium');

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

		public function sair() {

			$this->Session->delete("Usuarios");

		return $this->redirect(array('action' => "index", 'controller'=>'admin/'));
		

			}



	public function login() {

		if ($this->request->is('post')) {

			$options["conditions"] = array(
				'cpf' => $this->request->data["cpf"],
				'senha' => $this->request->data["senha"],
				);

			$usuario = $this->Usuario->find("first", $options);


			if (empty($usuario)) {
				$this->Session->setFlash("Usuário e senha inválidos");
			}else{
				$this->Session->write("Usuarios",$usuario["Usuario"] );
			}

			return $this->redirect(array('action' => "index", 'controller'=>'admin/'));

		}else{

			$this->layout = 'login';
		}


	}


public function api_favoritos($id=null){

	

	if(!empty($this->request->is('post'))){

		
		
		$this->Usuario->id = $this->request->data['usuario'];

		$this->Usuario->save(array(

			'origem_favorito' => $this->request->data['estado_origem'],
			'destino_favorito' => $this->request->data['estado_destino'],

		)); 

		$result['info'] = 'ok';
		echo json_encode($result);


	}

	exit();

	}


public function api_esqueceusenha(){

		
	
		if(!empty($this->request->is('post'))){



		 $doc = $this->request->data['documento'];

		 $conditions = array('conditions'=>array(
		 	'Usuario.cpf'=> $doc,
		 ));

		 $usuario = $this->Usuario->find('first',$conditions);
		 

		 $senha = (string) rand();
		 $senha_new = substr($senha,-7);


		$this->Usuario->id = $usuario['Usuario']['id'];

		$tel = $usuario['Usuario']['celular'];

		// $tel = '(15)99788-0780';

		$this->Usuario->save(array(

			'senha' => $senha_new,

		));

			$sid = "AC8b7f68ca96e8e1d80488ece04a4531f7";
			$token = "6324fff070f1faae98c63700a9e37714";

			$client = new Client($sid, $token);
			$client->messages->create(
				    '+55-'.$tel,
				    array(
				        'from' => '+1-509-956-4310 ',
				        'body' => "Uma nova senha foi gerada, Anote Sua Senha ".$senha_new
				    )
				);




		 $view = $usuario['Usuario'];

		 echo json_encode($view);


		}

		exit();

}

public function api_login(){

	if(!empty($this->request->query)){

		$options['conditions'] = array(

			'Usuario.cpf' => $this->request->query['cpf'],
			'Usuario.senha'=> $this->request->query['senha'],
		);

		$usuario = $this->Usuario->find('first',$options);


		if (!empty($usuario)) {
			$result["Usuario"] = $usuario;
			$result["erro"] = "nao";

			// print_r($usuario['Usuario']['id']);

			$this->Usuario->id = $usuario['Usuario']['id'];

			$data_log = date('Y-m-d');

			$this->Usuario->save(array(

				'last_login' => $data_log,
			));


		}else{
			$result["erro"] = "sim";
			$result["mensagem"] = "Nenhum usuario encontrado";

		}

	}

	echo json_encode($result);
	exit();
}

public function api_cep(){

if(!empty($this->request->query)){

 $cep = $this->request->query['cep'];

$url="https://viacep.com.br/ws/".$cep."/json/";
// echo ($url);
// exit();
	//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
// var_dump(json_decode($result, true));

echo ($result);
			
		
exit();

}
}


public function api_add(){

	if ($this->request->is('post')) {

			


			$this->Usuario->create();

	

			$doc = $this->request->data['cpf'];
		$valor1 = str_replace('.', '', $doc);
		$valor2 = str_replace('-', '', $valor1);

			$this->request->data['cpf'] = $valor2;


		if ($this->Usuario->save($this->request->data)) {
			

			$result["mensagem"] = "usuario cadastrado";
			$result["id"] = $this->Usuario->getLastInsertId();



		}else{

			
			$result = "Erro ao tentar cadastrar usuario";

		}

		
}

		echo json_encode($result);
		exit();

}


public function api_add2($id = null){

	

			$doc =  str_replace('.','',$this->request->data['cpf']);
			
			$doc2 = str_replace('/','',$doc);
			$doc3 = str_replace('-','',$doc2);

			$this->request->data['cpf'] = $doc3;


	if ($this->request->is('post')) {

		$id = $this->request->data['id'];

		if ($this->Usuario->save($this->request->data)) {
			

			$result["mensagem"] = "usuario cadastrado";
			
			

			// $id = $this->Usuario->getLastInsertId();
			
			 $conditions = array('conditions'=>array(
		 	'Usuario.id'=> $id,
			 ));

		 	

		 	$usuario = $this->Usuario->find('first',$conditions);

			$tel = $usuario['Usuario']['celular'];
			$cpf = $usuario['Usuario']['cpf'];
			$senha1 = $usuario['Usuario']['senha'];


			// $result["user"] = $id_user;
			
			$sid = "AC8b7f68ca96e8e1d80488ece04a4531f7";
			$token = "6324fff070f1faae98c63700a9e37714";

			
			$client = new Client($sid, $token);
			$client->messages->create(
				    '+55-'.$tel,
					// '+55-15-99788-0780',
				    array(
				        'from' => '+1-509-956-4310 ',
				        'body' => "Bem-Vindo ao Agrega Trucking!
Login:".$cpf."
Senha:".$senha1,
				    )
				);


		}else{

			
			$result["erro"] = "Erro ao tentar cadastrar usuario";

		}

		
}

		echo json_encode($result);
		exit();

}
	// if($this->resquest->is('post')){
	//    $this->request->is('post')) 

	// 	$this->Usuario->create();

	// 	$this->Usuario->save($this->request->data);

	// }
			
// 








	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Flash->success(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
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
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Flash->success(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
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
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Flash->success(__('The usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index(){

		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());

		
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {



		if ($this->request->is('post')) {

			

    	if(empty($this->request->data['Usuario']['cpf'])){

				$this->request->data['Usuario']['cpf'] = $this->request->data['Usuario']['cnpj'];

			}	


			// if(empty($this->request->data['Usuario']['cpf'])){

			// 	$this->request->data['Usuario']['cpf'] = $this->request->data['Usuario']['cnpj'];

			// }	

			// $cpf = $this->request->data['Usuario']['cpf'];


			// $conditions = array('conditions' => array(
			// 	'Usuario.cpf' => $cpf,

			//  ));


			// $verification = $this->Usuario->find('all',$conditions);


			


			// if(!empty($verification)){

			// 	$this->Flash->error(__('já existe um usuario com esse cpf'));

			// 	 break;

			// }


			// echo "<pre>";
			// print_r($this->request->data);
			// print_r($verification);
			// exit();
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
				$this->Flash->success(__('The usuario has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Usuario->validationErrors;
			$this->set('ValidateAjay',$errors);


			$this->Flash->render($errors);
			}
		}



		

		
		$TipoVeiculo = array(
			'Truck' => 'Truck',
			'Carreta' => 'Carreta',
			 );

		$tipos = array(
			'CPF' => 'CPF',
			'CNPJ' => 'CNPJ',
			 );

		$opcoes = array(
			'0' => 'Não',
			'1' => 'Sim',
			 );

		$carrocerias = $this->TipoCarrocerium->find('list');

		// debug($produtos);
		// debug($carrocerias);

		// exit();


		// $this->set('result',$result);

		
		$this->set('tipos',$tipos);
		$this->set('opcoes',$opcoes);
		$this->set('carrocerias',$carrocerias);
		
		$this->set('TipoVeiculo',$TipoVeiculo);
		


	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			// echo	"<pre>";
			// print_r($this->request->data);
			// exit();
			$this->Usuario->id = $id;
			if ($this->Usuario->save($this->request->data)) {
				$this->Flash->success(__('Usuário Editado Com Sucesso!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The usuario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$this->request->data = $this->Usuario->find('first', $options);
		}

		$TipoVeiculo = array(
			'Truck' => 'Truck',
			'Carreta' => 'Carreta',
			 );

			$opcoes = array(
			'0' => 'Não',
			'1' => 'Sim',
			 );



		$tipos = array(
			'CPF' => 'CPF',
			'CNPJ' => 'CNPJ',
			 );



		$carrocerias = $this->TipoCarrocerium->find('list');

		// debug($produtos);
		// debug($carrocerias);

		// exit();


		// $this->set('result',$result);

		
		$this->set('opcoes',$opcoes);
		$this->set('tipos',$tipos);
		$this->set('carrocerias',$carrocerias);
		
		$this->set('TipoVeiculo',$TipoVeiculo);

	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Usuario->delete()) {
			$this->Flash->success(__('The usuario has been deleted.'));
		} else {
			$this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
