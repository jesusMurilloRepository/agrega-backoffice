<?php
App::uses('TipoCarrocerium', 'Model');

/**
 * TipoCarrocerium Test Case
 */
class TipoCarroceriumTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_carrocerium'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoCarrocerium = ClassRegistry::init('TipoCarrocerium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoCarrocerium);

		parent::tearDown();
	}

}
