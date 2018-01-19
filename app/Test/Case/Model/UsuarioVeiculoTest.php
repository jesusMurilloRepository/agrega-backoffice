<?php
App::uses('UsuarioVeiculo', 'Model');

/**
 * UsuarioVeiculo Test Case
 */
class UsuarioVeiculoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.usuario_veiculo',
		'app.veiculo',
		'app.modelo',
		'app.acessorio',
		'app.tipo',
		'app.usuario',
		'app.usuarios_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsuarioVeiculo = ClassRegistry::init('UsuarioVeiculo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsuarioVeiculo);

		parent::tearDown();
	}

}
