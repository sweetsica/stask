<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('parentTaskId')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->float('kpi')->nullable();
            $table->float('resultKpi')->nullable();
            $table->integer('time')->nullable();
            $table->string('tag')->nullable();
            $table->integer('status')->nullable();
            $table->text('comment')->nullable();
            $table->integer('projectId')->nullable();
            $table->integer('userIdWork')->nullable();
            $table->integer('userIdLead')->nullable();
            $table->integer('normId')->nullable();
            $table->dateTime('startTime')->nullable();
            $table->dateTime('endTime')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
