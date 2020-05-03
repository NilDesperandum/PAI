<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 */
class Employee extends AppModel {
	var $validate = array(
	'nazwisko' => array(
		'rule' => 'notBlank'),
	'etat' => array(
		'rule'=>'notBlank'),
	'placa_pod' => array(
		'min' => array(
			'rule' => array('comparison','>=',0)
		),
		'max' => array(
			'rule' => array('comparison','<=',2000)
		)
	)
	);
}
