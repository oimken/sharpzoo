<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxonomyMetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taxonomy_metas', function(Blueprint $table)
		{
            $table->engine = 'MyISAM';
			$table->increments('id');
            $table->integer('taxonomy_id')->unsigned();
            $table->string('lang',10)->default('en');
            $table->string('name', 255);
            $table->string('desc', 255)->nullable();
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('taxonomy_metas');
	}

}
