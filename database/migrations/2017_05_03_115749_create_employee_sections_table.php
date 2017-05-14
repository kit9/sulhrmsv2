<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->text('emp_code');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('section_id');
            $table->date('section_effective_start_date');
            $table->date('section_effective_end_date');
            $table->unsignedInteger('status');
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
        Schema::dropIfExists('employee_sections');
    }
}
