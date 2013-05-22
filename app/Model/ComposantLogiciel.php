<?php
App::uses('AppModel', 'Model');
/**
 * ComposantLogiciel Model
 *
 * @property VersionComposant $VersionComposant
 * @property Type $Type
 * @property Nature $Nature
 * @property License $License
 * @property VersionComposant $VersionComposant
 */
class ComposantLogiciel extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'composant_logiciel';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
        
	public $hasOne = array(
		'VersionC' => array(
			'className' => 'VersionComposant',
			'foreignKey' => 'composant_logiciel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Type' => array(
			'className' => 'Type',
			'foreignKey' => 'type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nature' => array(
			'className' => 'Nature',
			'foreignKey' => 'nature_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'License' => array(
			'className' => 'License',
			'foreignKey' => 'license_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'VersionComposant' => array(
			'className' => 'VersionComposant',
			'foreignKey' => 'version_composant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
