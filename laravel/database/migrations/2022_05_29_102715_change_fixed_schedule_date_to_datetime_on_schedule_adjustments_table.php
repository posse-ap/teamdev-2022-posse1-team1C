<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFixedScheduleDateToDatetimeOnScheduleAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedule_adjustments', function (Blueprint $table) {
            $table->datetime('fixed_schedule')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedule_adjustments', function (Blueprint $table) {
            $table->date('fixed_schedule')->change();
        });
    }
}
