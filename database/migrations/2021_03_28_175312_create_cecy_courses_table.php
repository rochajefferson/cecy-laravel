<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCecyCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable();
            $table->string('code', 150)->nullable();
            $table->boolean('free')->nullable();
            $table->double('cost')->nullable();
            $table->integer('hours_duration')->nullable();
            $table->integer('capacity')->nullable();
            $table->string('place', 150)->nullable();
            $table->string('resume', 150)->nullable();
            $table->integer('career_id')->nullable();
            $table->integer('course_period_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('username', 150)->nullable();
            $table->integer('course_type_id')->nullable();
            $table->integer('modality_id')->nullable();
            $table->integer('participant_type_id')->nullable();
            $table->integer('practice_hours')->nullable();
            $table->integer('theory_hours')->nullable();
            $table->longText('photo')->nullable();
            $table->integer('area_id')->nullable();
            $table->integer('specialty_id')->nullable();
            $table->string('observation', 150)->nullable();
            $table->longText('bibliographys')->nullable();
            $table->longText('lista_necesidades')->nullable();
            $table->longText('lista_prerequisitos')->nullable();           
            $table->longText('lista_requisitos')->nullable();
            $table->longText('lista_temas_principales')->nullable();
            $table->longText('lista_temas_secundarios')->nullable();
            $table->longText('lista_temas_transversales')->nullable();
            $table->longText('lista_evaluaciones_diagnosticas')->nullable();
            $table->longText('lista_evaluaciones_procesos')->nullable();
            $table->longText('lista_evaluaciones_finales')->nullable();            
            $table->longText('lista_instalaciones')->nullable();
            $table->longText('lista_fases_teoricas')->nullable();
            $table->longText('lista_fases_practicas')->nullable();       
            $table->interger('state')->nullable()->default(1);
            $table->interger('status')->nullable()->default(1);
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
        Schema::connection('pgsql-cecy')->dropIfExists('courses');
    }
}
