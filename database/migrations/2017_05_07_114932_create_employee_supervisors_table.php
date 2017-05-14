<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_supervisors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('employee_info_id');
            $table->unsignedInteger('employee_info_sup_id');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('employee_info_id')->references('id')->on('employee_infos');
            $table->foreign('employee_info_sup_id')->references('id')->on('employee_infos');
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
        Schema::dropIfExists('employee_supervisors');
    }
}
