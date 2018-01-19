<?php
App::uses('RotaPadagio', 'Model');

/**
 * RotaPadagio Test Case
 */
class RotaPadagioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rota_padagio'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RotaPadagio = ClassRegistry::init('RotaPadagio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RotaPadagio);

		parent::tearDown();
	}

}
