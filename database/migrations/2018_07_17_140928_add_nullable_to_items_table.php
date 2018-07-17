<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('material2')->nullable()->change();
            $table->string('material3')->nullable()->change();
            $table->string('material4')->nullable()->change();
            $table->string('material5')->nullable()->change();
            $table->string('recipe2')->nullable()->change();
            $table->string('recipe3')->nullable()->change();
            $table->string('recipe4')->nullable()->change();
            $table->string('recipe5')->nullable()->change();
            $table->string('tool2')->nullable()->change();
            $table->string('tool3')->nullable()->change();
            $table->string('tool4')->nullable()->change();
            $table->string('tool5')->nullable()->change();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
