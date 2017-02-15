<?php
namespace App\Migration;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

class BoardMigration
{
	public function createTable()
	{
		if(!Capsule::schema()->hasTable('boards')) {
			Capsule::schema()->create('boards', function(Blueprint $table)
				{
					$table->increments('id_board');
					$table->string('name_board', 50);
					$table->timestamps();
					$table->softDeletes();
				});
		}
	}
}