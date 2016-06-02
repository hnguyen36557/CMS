<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPagesAddOrderColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->integer('parent_id')->nullbale();
            $table->integer('lft')->nullbale();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn([
                'parent_id', 'lft', 'rgt', 'depth'
            ]);
        });
    }
}
