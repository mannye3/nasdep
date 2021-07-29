<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncubatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incubators', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->index('incubators_company_id_foreign')->comment('Company registration details in company table');
            $table->text('overview')->nullable()->comment('Summary of profile of the Incubator Company');
            $table->longText('govt_approval')->nullable()->comment('Govt approvals in Different Countries');
            $table->longText('industry_preferences')->nullable()->comment('industry preferences for the incubator');
            $table->longText('growth_preferences')->nullable()->comment('sector preferences for the incubator');
            $table->unsignedInteger('authorized_by')->index('incubators_authorized_by_foreign')->comment('internal user that created it');
            $table->unsignedInteger('managed_by')->nullable()->index('incubators_managed_by_foreign')->comment('external user that manages this company profile');
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
        Schema::dropIfExists('incubators');
    }
}
