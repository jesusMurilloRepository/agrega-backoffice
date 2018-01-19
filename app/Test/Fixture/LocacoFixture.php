<?php
/**
 * Locaco Fixture
 */
class LocacoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'locacoes';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status_locacao' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'usuario_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'usuario_tipo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'veiculo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'modelo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codigo' => 'Lorem ipsum dolor sit amet',
			'status_locacao' => 'Lorem ipsum dolor sit amet',
			'usuario_id' => 1,
			'usuario_tipo' => 'Lorem ipsum dolor sit amet',
			'veiculo_id' => 1,
			'modelo_id' => 1,
			'created' => '2017-10-17 13:28:37',
			'modified' => '2017-10-17 13:28:37'
		),
	);

}
