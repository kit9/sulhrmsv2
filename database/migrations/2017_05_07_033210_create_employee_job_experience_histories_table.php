<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeJobExperienceHistoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up() {
        Schema::create('employee_job_experience_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->text('company_address');
            $table->text('desigantion');
            $table->text('responsibility');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('cirtificateupload');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('employee_job_experience_histories');
    }

}
