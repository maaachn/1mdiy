<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name');
            $table->string('content');
            $table->string('image_url');
            $table->string('m_type')->index();
            $table->string('material1');
            $table->string('material2')->nullable()->change();
            $table->string('material3')->nullable()->change();
            $table->string('material4')->nullable()->change();
            $table->string('material5')->nullable()->change();
            $table->string('recipe1');
            $table->string('recipe2')->nullable()->change();
            $table->string('recipe3')->nullable()->change();
            $table->string('recipe4')->nullable()->change();
            $table->string('recipe5')->nullable()->change();
            $table->string('tool1');
            $table->string('tool2')->nullable()->change();
            $table->string('tool3')->nullable()->change();
            $table->string('tool4')->nullable()->change();
            $table->string('tool5')->nullable()->change();
            $table->timestamps();
            
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users');
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('works');
    }
}
