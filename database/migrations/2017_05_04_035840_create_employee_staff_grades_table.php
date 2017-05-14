<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeStaffGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_staff_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->text('emp_code');
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('department_id');
            $table->unsignedInteger('section_id');
            $table->unsignedInteger('staff_grade_id');
            $table->date('staffgrade_effective_start_date');
            $table->date('staffgrade_effective_end_date');
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
        Schema::dropIfExists('employee_staff_grades');
    }
}
