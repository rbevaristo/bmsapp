<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_task', function (Blueprint $table) {
            $table->integer('employee_id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('task_id')->references('id')->on('tasks');
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
        Schema::dropIfExists('employee_task');
    }
}
