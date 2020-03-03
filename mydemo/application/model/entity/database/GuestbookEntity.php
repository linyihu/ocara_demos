<?php
namespace app\model\entity\database;

use Base\Model\DatabaseEntity;

class GuestbookEntity extends DatabaseEntity
{
	public function __entity()
	{}

	public static function source()
	{
		return 'app\model\database\GuestbookModel';
	}
}