<?php
App::uses('StatusTraslado', 'Model');

/**
 * StatusTraslado Test Case
 */
class StatusTrasladoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status_traslado'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StatusTraslado = ClassRegistry::init('StatusTraslado');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StatusTraslado);

		parent::tearDown();
	}

}
