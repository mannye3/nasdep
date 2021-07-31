<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalystsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analysts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->index('analysts_company_id_foreign')->comment('Company registration details in company table');
            $table->string('about')->nullable()->comment('Quick intro about the company');
            $table->text('overview')->nullable()->comment('Summary of profile of the Analyst Company');
            $table->string('website')->nullable()->comment('Company website address');
            $table->string('addr')->nullable()->comment('Company head address and location');
            $table->unsignedInteger('country_id')->nullable()->default(1)->index('analysts_country_id_foreign')->comment('Company location country');
            $table->unsignedInteger('state_id')->nullable()->index('analysts_state_id_foreign')->comment('Company location state');
            $table->longText('govt_approval')->nullable()->comment('Govt approvals in Different Countries');
            $table->unsignedInteger('authorized_by')->index('analysts_authorized_by_foreign')->comment('internal user that created it');
            $table->unsignedInteger('managed_by')->nullable()->index('analysts_managed_by_foreign')->comment('extrernal user that manages this company profile');
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
        Schema::dropIfExists('analysts');
    }
}
