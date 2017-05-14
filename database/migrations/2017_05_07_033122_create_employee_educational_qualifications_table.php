<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeEducationalQualificationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('employee_educational_qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('institute');
            $table->text('institute_add');
            $table->text('result');
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
        Schema::dropIfExists('employee_educational_qualifications');
    }

}
