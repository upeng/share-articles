<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class Share extends Model
{
	protected $table;
	const PAGE_SIZE = 10;
	public function __construct()
	{
		$this->table = DB::table('share_food');
	}
	public function getShareList()
	{
		return $this->table->select('id', 'share_url', 'share_desp', 'share_time', 'realname')->orderBy('share_time', 'desc')->paginate(self::PAGE_SIZE);
	}
}
