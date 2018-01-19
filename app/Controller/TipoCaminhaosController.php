<?php
App::uses('AppController', 'Controller');
/**
 * TipoCaminhaos Controller
 *
 * @property TipoCaminhao $TipoCaminhao
 * @property PaginatorComponent $Paginator
 */
class TipoCaminhaosController extends AppController {
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
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */




	public function api_caminhao()
	{
		
			// http://localhost/agrega_backoffice/api/TipoCaminhaos/caminhao
		
		// exit('1');
		
	$caminhao = $this->TipoCaminhao->find("all");

	echo json_encode($caminhao);

	exit();

	}


	public function index() {
		$this->TipoCaminhao->recursive = 0;
		$this->set('tipoCaminhaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoCaminhao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		$options = array('conditions' => array('TipoCaminhao.' . $this->TipoCaminhao->primaryKey => $id));
		$this->set('tipoCaminhao', $this->TipoCaminhao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoCaminhao->create();
			if ($this->TipoCaminhao->save($this->request->data)) {
				$this->Flash->success(__('The tipo caminhao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo caminhao could not be saved. Please, try again.'));
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
		if (!$this->TipoCaminhao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoCaminhao->save($this->request->data)) {
				$this->Flash->success(__('The tipo caminhao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo caminhao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoCaminhao.' . $this->TipoCaminhao->primaryKey => $id));
			$this->request->data = $this->TipoCaminhao->find('first', $options);
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
		$this->TipoCaminhao->id = $id;
		if (!$this->TipoCaminhao->exists()) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoCaminhao->delete()) {
			$this->Flash->success(__('The tipo caminhao has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo caminhao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TipoCaminhao->recursive = 0;
		$this->set('tipoCaminhaos', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TipoCaminhao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		$options = array('conditions' => array('TipoCaminhao.' . $this->TipoCaminhao->primaryKey => $id));
		$this->set('tipoCaminhao', $this->TipoCaminhao->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoCaminhao->create();
			if ($this->TipoCaminhao->save($this->request->data)) {
				$this->Flash->success(__('The tipo caminhao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo caminhao could not be saved. Please, try again.'));
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
		if (!$this->TipoCaminhao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoCaminhao->save($this->request->data)) {
				$this->Flash->success(__('The tipo caminhao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tipo caminhao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoCaminhao.' . $this->TipoCaminhao->primaryKey => $id));
			$this->request->data = $this->TipoCaminhao->find('first', $options);
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
		$this->TipoCaminhao->id = $id;
		if (!$this->TipoCaminhao->exists()) {
			throw new NotFoundException(__('Invalid tipo caminhao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TipoCaminhao->delete()) {
			$this->Flash->success(__('The tipo caminhao has been deleted.'));
		} else {
			$this->Flash->error(__('The tipo caminhao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
