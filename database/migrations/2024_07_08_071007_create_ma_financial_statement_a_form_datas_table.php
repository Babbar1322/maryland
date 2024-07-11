<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaFinancialStatementAFormDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('26_ma_financial_statement_a_form_datas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('a_financial_id');
            $table->string('keyss');
            $table->string('valuess')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('26_ma_financial_statement_a_form_datas');
    }
}
