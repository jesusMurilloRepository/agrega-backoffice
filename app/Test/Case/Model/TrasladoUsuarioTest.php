<?php
App::uses('TrasladoUsuario', 'Model');

/**
 * TrasladoUsuario Test Case
 */
class TrasladoUsuarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.traslado_usuario',
		'app.traslado',
		'app.usuario',
		'app.usuarios_tipo',
		'app.status_traslado',
		'app.modelo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TrasladoUsuario = ClassRegistry::init('TrasladoUsuario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TrasladoUsuario);

		parent::tearDown();
	}

}
