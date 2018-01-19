<?php
App::uses('TipoCaminhao', 'Model');

/**
 * TipoCaminhao Test Case
 */
class TipoCaminhaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_caminhao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoCaminhao = ClassRegistry::init('TipoCaminhao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoCaminhao);

		parent::tearDown();
	}

}
