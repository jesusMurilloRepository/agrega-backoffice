<?php
App::uses('Locaco', 'Model');

/**
 * Locaco Test Case
 */
class LocacoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.locaco'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Locaco = ClassRegistry::init('Locaco');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locaco);

		parent::tearDown();
	}

}
