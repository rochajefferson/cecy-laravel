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
            $table->string('abbreviation', 150)->nullable();
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
            $table->longText('list_bibliographic')->nullable();
            $table->longText('list_needs')->nullable();
            $table->longText('list_prerequisites')->nullable();           
            $table->longText('list_requeriments ')->nullable();
            $table->longText('list_main_topics ')->nullable();
            $table->longText('list_subtopics')->nullable();
            $table->longText('list_cross_topics')->nullable();
            $table->longText('list_evaluations_diagnostic')->nullable();
            $table->longText('list_evaluations_process')->nullable();
            $table->longText('list_evaluations_final')->nullable();            
            $table->longText('list_facilities ')->nullable();
            $table->longText('list_phase_theore')->nullable();
            $table->longText('list_phase_practical')->nullable(); 
            $table->string('objective', 150)->nullable();
            $table->string('project', 150)->nullable();
            $table->longText('list_required_installing_sources')->nullable(); 
            $table->longText('list_practice_required_resources')->nullable(); 
            $table->longText('list_aimtheory_required_resources')->nullable(); 
            $table->longText('list_learning_teaching_strategy')->nullable(); 
            $table->longText('list_teaching_strategies')->nullable();
            $table->integer('state')->nullable()->default(1);
            $table->integer('status')->nullable()->default(1);
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
