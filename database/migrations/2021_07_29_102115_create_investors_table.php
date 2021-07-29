<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->index('investors_company_id_foreign')->comment('Company registration details in company table');
            $table->string('about')->nullable()->comment('Quick intro about the company');
            $table->text('overview')->nullable()->comment('Summary of profile of the Investor Company');
            $table->string('website')->nullable()->comment('Company website address');
            $table->string('addr')->nullable()->comment('Company head address and location');
            $table->unsignedInteger('country_id')->nullable()->default(1)->index('investors_country_id_foreign')->comment('Company location country');
            $table->unsignedInteger('state_id')->nullable()->index('investors_state_id_foreign')->comment('Company location state');
            $table->longText('govt_approval')->nullable()->comment('Govt approvals in Different Countries');
            $table->longText('sector_industry')->nullable()->comment('industry preferences for the investor');
            $table->longText('sector_preferences')->nullable()->comment('sector preferences for the investor');
            $table->unsignedInteger('authorized_by')->index('investors_authorized_by_foreign')->comment('internal user that created it');
            $table->unsignedInteger('managed_by')->nullable()->index('investors_managed_by_foreign')->comment('extrernal user that manages this company profile');
            $table->tinyInteger('verified')->default(0);
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
        Schema::dropIfExists('investors');
    }
}
