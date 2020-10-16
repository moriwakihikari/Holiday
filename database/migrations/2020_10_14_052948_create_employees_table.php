<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('post_id')->length(2)->foreign()->references('id')->on('posts');
            $table->unsignedInteger('department_id')->length(2)->foreign()->references('id')->on('departments');
            $table->string('last_name', 20);
            $table->string('first_name', 20);
            $table->date('birth_date');
            $table->string('address', 100);
            $table->date('hired_date');
            $table->string('academic_history', 10);
            $table->string('school_name', 50);
            $table->unsignedInteger('dependents_count')->length(2);
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
        Schema::dropIfExists('employees');
    }
}
