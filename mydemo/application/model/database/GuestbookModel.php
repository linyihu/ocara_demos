<?php
namespace app\model\database;
use Base\Model\DatabaseModel;

class GuestbookModel extends DatabaseModel
{
	protected static $table = 'guestbook';
	protected static $primary = 'id';
	protected static $entity = 'app\model\entity\database\GuestbookEntity';

	/**
	 * 初始化模型
	 */
	public function __model()
	{}

	/**
	 * 字段别名映射配置
	 */
	public function fieldsMap()
	{}

	/**
	 * 表间关联配置
	 */
	public function relations()
	{}

	/**
	 * 字段验证配置
	 */
	public function rules()
	{}
}