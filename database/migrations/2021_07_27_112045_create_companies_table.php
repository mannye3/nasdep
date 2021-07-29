<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Company name');
            $table->string('slug')->nullable()->comment('Company code created by Ops');
            $table->string('logo')->default('default/company.png');
            $table->text('about')->comment('Quick intro about the company');
            $table->string('number')->unique()->comment('Company registration number');
            $table->string('website')->nullable()->comment('Company website address');
            $table->date('doi')->comment('Company registration date');
            $table->string('addr')->comment('Company head address and location');
            $table->unsignedInteger('country_id')->default(1)->index('companies_country_id_foreign')->comment('Company location country');
            $table->unsignedInteger('state_id')->index('companies_state_id_foreign')->comment('Company location state');
            $table->unsignedInteger('industry_id')->index('companies_industry_id_foreign')->comment('Major Industry Company features in');
            $table->unsignedInteger('ind_exp');
            $table->unsignedInteger('authorized_by')->nullable()->index('companies_authorized_by_foreign')->comment('user that created it');
            $table->string('type')->default('ltd')->comment('Type of coy, ltd or plc');
            $table->tinyInteger('verified')->default(0);
            $table->unsignedInteger('by_user')->nullable()->index('companies_by_user_foreign');
            $table->tinyInteger('dummy')->default(0);
            $table->tinyInteger('suspended')->default(0);
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
        Schema::dropIfExists('companies');
    }
}
