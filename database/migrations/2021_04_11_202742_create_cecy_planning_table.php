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
            $table->string('code')->nullable();
            $table->integer('course_id')->nullable();           
            $table->date('dateCreation')->nullable();          
            $table->longText('list_needs_planning ')->nullable();         
            $table->integer('school_period_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('status_cecy_id')->nullable();      
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
