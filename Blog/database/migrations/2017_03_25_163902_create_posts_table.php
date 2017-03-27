<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_path')->comment('포스트 썸네일');
            $table->string('title')->comment('포스트 제목');
            $table->string('content')->comment('포스트 컨텐츠(텍스트, 이미지등)');
            // index는 컬럼에 인덱스건다
            // unsigned는 음수 불가능 하게함
            // user table의 id를 쓰려고할때는 관례로 "테이블명_id"로 써주면 라라벨이 알아서 동작함
            $table->integer('user_id')->unsigned()->index()->comment('포스트 작성자');
            $table->timestamps();
            // 외래키 걸어줌
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
