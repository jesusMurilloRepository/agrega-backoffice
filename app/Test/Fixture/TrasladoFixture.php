<?php
/**
 * Traslado Fixture
 */
class TrasladoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'traslados_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usuarios_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'veiculos_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'traslados_id' => 1,
			'usuarios_id' => 1,
			'veiculos_id' => 1,
			'created' => '2017-10-03 20:04:35',
			'modified' => '2017-10-03 20:04:35'
		),
	);

}
