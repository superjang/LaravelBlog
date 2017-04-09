<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_path')->comment('메인 컨텐츠 이미지');
            $table->string('title')->comment('메인 컨텐츠 타이틀');
            $table->string('sub_title')->comment('메인 컨텐츠 서브 타이틀');
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
        Schema::dropIfExists('main_content');
    }
}
