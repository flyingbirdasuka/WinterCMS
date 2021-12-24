<?php namespace Asuka\Portfoilio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAsukaPortfoilioPortfolios3 extends Migration
{
    public function up()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->string('video');
        });
    }
    
    public function down()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->dropColumn('video');
        });
    }
}
