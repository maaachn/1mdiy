<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToItemProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_process', function (Blueprint $table) {
            $table->string('process1')->nullable()->change();
            $table->string('process2')->nullable()->change();
            $table->string('process3')->nullable()->change();
            $table->string('process4')->nullable()->change();
            $table->string('process5')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_process', function (Blueprint $table) {
            $table->string('process1')->change();
            $table->string('process2')->change();
            $table->string('process3')->change();
            $table->string('process4')->change();
            $table->string('process5')->change();
        });
    }
}
