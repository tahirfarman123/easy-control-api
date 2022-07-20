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
        Schema::create('tasksscheduledetails', function (Blueprint $table) {
           $table->id();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();

            $table->dateTime('TaskScheduleDate')->nullable();
            $table->dateTime('TaskCompletedDate')->nullable();
            $table->dateTime('FromDate')->nullable();
            $table->dateTime('ToDate')->nullable();
            $table->longText('Remarks')->nullable();
            $table->longText('HouseKeeperRemarks')->nullable();
            $table->string('HouseKeeper',38)->nullable();
            $table->string('Room',38)->nullable();
            $table->string('Task',38)->nullable();
            $table->string('RoomStatus',38)->nullable();
            $table->string('Status',38)->nullable();
            $table->string('TaskSchedule',38)->nullable();
           
            $table->integer('OptimisticLockField')->nullable();
            $table->integer('GCRecord')->nullable();
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
        Schema::dropIfExists('tasksscheduledetails');
    }
};