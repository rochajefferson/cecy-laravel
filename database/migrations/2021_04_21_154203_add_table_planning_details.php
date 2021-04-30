<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTablePlanningDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-cecy')->create('plannig_details', function (Blueprint $table) {
        $table->id();    
        $table->integer('course_id')->nullable();  
        $table->integer('planning_id')->nullable();  
        $table->date('dateFinal')->nullable();
        $table->date('dateEnd ')->nullable();
        $table->date('dateStart')->nullable();
        $table->string('days')->nullable();
        $table->integer('develop_day_id')->nullable();
        $table->integer('end_time_id')->nullable();
        $table->integer('start_time_id')->nullable();
        $table->integer('classroom_id')->nullable();   
        $table->string('capacity')->nullable();
        $table->integer('paralel_id')->nullable();
        $table->integer('workday_type_id')->nullable();  
        $table->string('code_certificate')->nullable();    
        $table->string('state_certificate')->nullable();  
        $table->integer('instructor_id')->nullable(); 
        $table->integer('status_cecy_id')->nullable();         
        $table->string('resumen_planning')->nullable();   
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
        Schema::dropIfExists('plannig_details');
    }
}
