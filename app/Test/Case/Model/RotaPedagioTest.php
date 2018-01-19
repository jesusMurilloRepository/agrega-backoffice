<?php
App::uses('RotaPedagio', 'Model');

/**
 * RotaPedagio Test Case
 */
class RotaPedagioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rota_pedagio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RotaPedagio = ClassRegistry::init('RotaPedagio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RotaPedagio);

		parent::tearDown();
	}

}
