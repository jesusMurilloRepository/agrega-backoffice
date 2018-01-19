<?php
App::uses('Traslado', 'Model');

/**
 * Traslado Test Case
 */
class TrasladoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.traslado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Traslado = ClassRegistry::init('Traslado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Traslado);

		parent::tearDown();
	}

}
