<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->string('name_cn')->comment('中文名');
            $table->string('name_en')->comment('英文名');
            $table->string('avatar')->comment('头像图片地址')->nullable();
            $table->string('photo')->comment('大图地址')->nullable();
            $table->string('link')->comment('个人网站链接')->nullable();
            $table->text('info_cn')->comment('中文信息');
            $table->text('info_en')->comment('英文信息');
            $table->text('custom')->comment('自定义区域')->nullable();
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
        Schema::dropIfExists('faculties');
    }
};
