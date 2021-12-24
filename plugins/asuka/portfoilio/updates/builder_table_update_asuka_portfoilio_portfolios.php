<?php namespace Asuka\Portfoilio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAsukaPortfoilioPortfolios extends Migration
{
    public function up()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->string('date');
            $table->string('language');
        });
    }
    
    public function down()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->dropColumn('date');
            $table->dropColumn('language');
        });
    }
}
