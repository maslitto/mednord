<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->json('images');
            $table->text('text');
            //$table->string('vendor');
            $table->string('article');

            $table->json('params');

            $table->tinyInteger('hit');
            $table->tinyInteger('new');
            $table->tinyInteger('discount');

            $table->string('metatitle');
            $table->string('metakeywords');
            $table->string('metadescription');
            $table->string('h1');
            $table->text('seotext');
            $table->string('slug');

            /* foreign keys*/
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('pages');
            $table->integer('vendor_id')->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }

}
