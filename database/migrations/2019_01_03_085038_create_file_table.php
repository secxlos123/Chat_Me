<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('messages_id');
            $table->text('title');
            $table->text('file');
            $table->timestamp('created_at')->useCurrent();
            $table->date('updated_at')->nullable();
            $table->foreign('messages_id')->references('id')->on('messages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('files');
    }
}
