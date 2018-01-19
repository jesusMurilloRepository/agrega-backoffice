<?php
App::uses('Taxa', 'Model');

/**
 * Taxa Test Case
 */
class TaxaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taxa'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taxa = ClassRegistry::init('Taxa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taxa);

		parent::tearDown();
	}

}
