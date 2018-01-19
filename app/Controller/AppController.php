<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	 public $components = array('Session');
	 public $uses = array('Oferta','Usuario');

	 
	 public function beforeRender(){

	 


		$ofertas_ativas = $this->Oferta->find('all', array(

			'conditions' => array(
				'status_lance' => 'Ativo',
			)

		));

		$usuariosApp = $this->Usuario->find('all');

		$usuariosApp1 = count($usuariosApp);
		
		// print_r($usuariosApp1);
		// exit();

		$ofertas_ativas1 = count($ofertas_ativas);

		$this->set('usuariosApp', $usuariosApp1);
		$this->set('ofertas_ativas', $ofertas_ativas1);


		  $login = $this->Session->check("Usuarios");
		


			$isAdmin = empty($this->params['admin']);

			$a = $this->here;
			
			if (strpos($a, '/') !== false) {

				if ($login == true) {
					$this->layout = 'default';	
				}else{
					
					$this->layout = 'login';	
				}

			}else{



				$this->layout = 'default';
			}

	}
}

