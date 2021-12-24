<?php namespace Asuka\Portfoilio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAsukaPortfoilioPortfolios extends Migration
{
    public function up()
    {
        Schema::create('asuka_portfoilio_portfolios', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('image');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('asuka_portfoilio_portfolios');
    }
}
