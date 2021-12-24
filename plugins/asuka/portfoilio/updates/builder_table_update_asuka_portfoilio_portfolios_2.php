<?php namespace Asuka\Portfoilio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateAsukaPortfoilioPortfolios2 extends Migration
{
    public function up()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('asuka_portfoilio_portfolios', function($table)
        {
            $table->string('description', 191)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
