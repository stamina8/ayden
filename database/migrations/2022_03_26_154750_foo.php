<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('thud',false,true);  // 无符号正数
            $table->boolean('wombat')->default(false); // 默认false
            // $table->boolean('wombat')->nullable(); // 可以为空
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foo');
    }
}
