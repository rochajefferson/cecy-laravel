<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCecyPlanningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('plannings', function (Blueprint $table) {
            $table->id();
            $table->string('capacity')->nullable();
            $table->integer('classroom_id')->nullable();
            $table->string('code')->nullable();
            $table->string('code_certificate')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('school_period_id')->nullable();
            $table->string('days')->nullable();
            $table->integer('develop_day_id')->nullable();
            $table->integer('end_time_id')->nullable();
            $table->date('fechaCreacion')->nullable();
            $table->date('fechaFinal')->nullable();
            $table->date('fechaFinalizacion')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->integer('instructor_id')->nullable();
            $table->longText('lista_necesidades_planning')->nullable();
            $table->integer('paralel_id')->nullable();
            $table->string('record')->nullable();
            $table->string('resumen_planning')->nullable();
            $table->integer('start_time_id')->nullable();
            $table->string('state_certificate')->nullable();
            $table->integer('status_cecy_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('workday_type_id')->nullable();         
            $table->integer('state')->nullable()->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql-cecy')->dropIfExists('plannings');
    }
}
