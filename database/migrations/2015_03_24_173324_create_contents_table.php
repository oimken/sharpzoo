<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            // These columns are needed for Baum's Nested Set implementation to work.
            // Column names may be changed, but they *must* all exist and be modified
            // in the model.
            // Take a look at the model scaffold comments for details.
            // We add indexes on parent_id, lft, rgt columns by default.
            $table->engine = 'MyISAM';

            $table->increments('id');
            $table->integer('parent_id')->nullable()->index();
            $table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();

            // Add needed columns here (f.ex: name, slug, path, etc.)
            // $table->string('name', 255);
            $table->string('slug');

            //content type：article, page, memo, media, module, link
            $table->enum('type', array('page', 'article', 'memo', 'media', 'module', 'link'))->default('page');

            // author
            $table->integer('user_id')->unsigned()->default(0);

            // 0 => every user can see, or will be a user_id for private memo
            $table->tinyInteger('private')->unsigned()->default(0);


            //if it is attachment, store it's mime-type
            $table->string('mime_type', 30)->nullable();

            // store uri of the media/page/post
            $table->string('uri');

            // status for page or article, draft will not show on front-end
            $table->enum('status', array('published', 'draft'))->default('draft');

            // page views
            $table->integer('pvs')->unsigned()->nullable()->default(0);


            // 1 :comment open, 0:no comment
            $table->tinyInteger('comment_open')->unsigned()->default(0);
            $table->integer('comment_count')->unsigned()->default(0);;

            $table->softDeletes();
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
        Schema::drop('contents');
    }

}
