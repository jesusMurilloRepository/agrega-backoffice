<?php
App::uses('Promoco', 'Model');

/**
 * Promoco Test Case
 */
class PromocoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.promoco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Promoco = ClassRegistry::init('Promoco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Promoco);

		parent::tearDown();
	}

}
