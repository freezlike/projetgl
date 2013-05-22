<?php
App::uses('AppModel', 'Model');
/**
 * VersionComposant Model
 *
 * @property ComposantLogiciel $ComposantLogiciel
 * @property ComposantLogiciel $ComposantLogiciel
 */
class VersionComposant extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'version_composant';

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
        

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ComposantL' => array(
			'className' => 'ComposantLogiciel',
			'foreignKey' => 'composant_logiciel_id',
			'conditions' => '',
			'fields' => 'id',
			'order' => ''
		)
	);
}
