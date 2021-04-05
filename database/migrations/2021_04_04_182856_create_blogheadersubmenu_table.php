<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogheadersubmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogheadersubmenu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('menu_id')->nullable();
            $table->string('title')->nullable();
            $table->string('href')->nullable();
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
        Schema::dropIfExists('blogheadersubmenu');
    }
}
