<?php
App::uses('AppController', 'Controller');
/**
 * TipoCarroceria Controller
 *
 * @property TipoCarrocerium $TipoCarrocerium
 * @property PaginatorComponent $Paginator
 */
class TipoCarroceriaController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
	// public $uses = array('Lance', 'Produto');


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


	public function api_carroceria()
	{
		


		
		// http://localhost/agrega_backoffice/api/TipoCarroceria/carroceria
		
	$carroceria = $this->TipoCarrocerium->find("all");

	echo json_encode($carroceria);

	exit();

	}




	public function index() {
		$this->TipoCarrocerium->recursive = 0;
		$this->set('tipoCarroceria', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoCarrocerium->exists($id)) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		$options = array('conditions' => array('TipoCarrocerium.' . $this->TipoCarrocerium->primaryKey => $id));
		$this->set('tipoCarrocerium', $this->TipoCarrocerium->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoCarrocerium->create();
			if ($this->TipoCarrocerium->save($this->request->data)) {
				$this->Flash->success(__('The tipo carrocerium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo carrocerium could not be saved. Please, try again.'));
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
		if (!$this->TipoCarrocerium->exists($id)) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoCarrocerium->save($this->request->data)) {
				$this->Flash->success(__('The tipo carrocerium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo carrocerium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoCarrocerium.' . $this->TipoCarrocerium->primaryKey => $id));
			$this->request->data = $this->TipoCarrocerium->find('first', $options);
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
		$this->TipoCarrocerium->id = $id;
		if (!$this->TipoCarrocerium->exists()) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoCarrocerium->delete()) {
			$this->Flash->success(__('The tipo carrocerium has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo carrocerium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TipoCarrocerium->recursive = 0;
		$this->set('tipoCarroceria', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TipoCarrocerium->exists($id)) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		$options = array('conditions' => array('TipoCarrocerium.' . $this->TipoCarrocerium->primaryKey => $id));
		$this->set('tipoCarrocerium', $this->TipoCarrocerium->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoCarrocerium->create();
			if ($this->TipoCarrocerium->save($this->request->data)) {
				$this->Flash->success(__('The tipo carrocerium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo carrocerium could not be saved. Please, try again.'));
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
		if (!$this->TipoCarrocerium->exists($id)) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoCarrocerium->save($this->request->data)) {
				$this->Flash->success(__('The tipo carrocerium has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo carrocerium could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoCarrocerium.' . $this->TipoCarrocerium->primaryKey => $id));
			$this->request->data = $this->TipoCarrocerium->find('first', $options);
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
		$this->TipoCarrocerium->id = $id;
		if (!$this->TipoCarrocerium->exists()) {
			throw new NotFoundException(__('Invalid tipo carrocerium'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoCarrocerium->delete()) {
			$this->Flash->success(__('The tipo carrocerium has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo carrocerium could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
