<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Childlist extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function details()
	{
		return $this->hasMany('App\Model\Checklist', 'id', 'checklist_id');
	}

}