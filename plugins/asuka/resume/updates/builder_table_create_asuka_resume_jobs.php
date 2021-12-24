<?php namespace Asuka\Resume\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAsukaResumeJobs extends Migration
{
    public function up()
    {
        Schema::create('asuka_resume_jobs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('class');
            $table->string('period');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('asuka_resume_jobs');
    }
}
