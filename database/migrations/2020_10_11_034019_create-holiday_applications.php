<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHolidayApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holiday_applications', function (Blueprint $table) {
            $table->bigIncrements('id')->length(5);
            $table->unsignedInteger('employee_id')->length(5)->foreign()->references('id')->on('users');
            $table->dateTime('submit_datetime');
            $table->unsignedInteger('holiday_type_id')->length(2)->foreign()->references('id')->on('holiday_types');
            $table->date('holiday_date_from');
            $table->date('holiday_date_to')->nullable();
            $table->double('total_days')->length(2);
            $table->time('holiday_time_from')->nullable();
            $table->time('holiday_time_to')->nullable();
            $table->string('reason',255);
            $table->string('remarks',255)->nullable();
            $table->unsignedInteger('application_status_id')->length(2)->foreign('application_status_id')->references('id')->on('application_statuses');
            $table->timestamps();
            $table->unique(['employee_id', 'holiday_date_from'], 'unique_employee_id_holiday_date_from');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('holiday_applications');
    }
}
