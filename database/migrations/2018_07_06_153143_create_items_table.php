<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('explain');
            $table->string('image_url');
            $table->string('m_type')->index();
            $table->string('material1');
            $table->string('material1');
            $table->string('material3');
            $table->string('material4');
            $table->string('material5');
            $table->string('recipe');
            $table->string('recipe2');
            $table->string('recipe3');
            $table->string('recipe4');
            $table->string('recipe5');
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
        Schema::dropIfExists('items');
    }
}
