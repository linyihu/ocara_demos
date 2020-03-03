<?php
/**
 * app\model\database\GuestbookModel Fields
 */
return array(
	'autoIncrementField' => 'id',
	'list' => array(
		'id' => array(
			'name' => 'id',
			'type' => 'int',
			'length' => 11,
			'lang' => 'ID',
			'isNull' => 0,
			'isPrimary' => 1,
			'defaultValue' => '',
			'extra' => 'auto_increment'
		),
		'telephone' => array(
			'name' => 'telephone',
			'type' => 'varchar',
			'length' => 30,
			'lang' => '联系电话',
			'isNull' => 0,
			'isPrimary' => 0,
			'defaultValue' => '',
			'extra' => ''
		),
		'content' => array(
			'name' => 'content',
			'type' => 'text',
			'length' => 0,
			'lang' => '留言内容',
			'isNull' => 0,
			'isPrimary' => 0,
			'defaultValue' => '',
			'extra' => ''
		)
	)
);
