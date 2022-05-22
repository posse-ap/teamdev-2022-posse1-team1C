<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallingLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calling_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('thread_id');
            $table->string('peerID');
            $table->boolean('is_mentor');
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
        Schema::dropIfExists('calling_logs');
    }
}
