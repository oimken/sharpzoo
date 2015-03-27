<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentMetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_metas', function(Blueprint $table)
		{
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->integer('content_id')->unsigned()->index();
            $table->foreign('content_id')->references('id')->on('contents')->onDelete('cascade')->onUpdate('cascade');
            $table->string('lang',10)->default('en');
            $table->string('title',255);
            $table->longText('content')->nullable();
            $table->string('keywords',255)->nullable();
            $table->text('excerpt')->nullable();
            $table->text('meta')->nullable();
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
		Schema::drop('content_metas');
	}

}
