<?php
/**
 * ComposantLogicielFixture
 *
 */
class ComposantLogicielFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'composant_logiciel';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'titre' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'nature_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'license_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'id_version' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'taux' => array('type' => 'float', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_type' => array('column' => 'type_id', 'unique' => 0),
			'fk_nature' => array('column' => 'nature_id', 'unique' => 0),
			'license_id' => array('column' => 'license_id', 'unique' => 0),
			'titre' => array('column' => 'titre', 'unique' => 0),
			'id_version' => array('column' => 'id_version', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'titre' => 'Lorem ipsum dolor sit amet',
			'type_id' => 1,
			'nature_id' => 1,
			'license_id' => 1,
			'id_version' => 1,
			'taux' => 1
		),
	);

}
