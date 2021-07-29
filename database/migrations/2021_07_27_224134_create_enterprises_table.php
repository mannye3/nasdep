<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id')->index('enterprises_company_id_foreign')->comment('Company registration details in company table');
            $table->unsignedInteger('industry_id')->index('enterprises_industry_id_foreign')->comment('Major industry for the company');
            $table->longText('sectors')->comment('sector tags for the company');
            $table->unsignedInteger('nod')->comment('No of directors in the company');
            $table->string('tof')->default('equity')->comment('Type of funding required');
            $table->unsignedInteger('noi')->nullable()->comment('Number of investors needed');
            $table->text('teaser')->comment('Investment opportunity of the company');
            $table->longText('fin_summary')->nullable()->comment('optional three years financial summary');
            $table->unsignedInteger('incubator_id')->nullable()->index('enterprises_incubator_id_foreign')->comment('ID of the belonging incubator');
            $table->string('employees')->default('11-50');
            $table->string('growth_stage')->default('seed');
            $table->longText('bmodel')->comment('business model');
            $table->longText('rmodel')->comment('revenue model');
            $table->longText('others')->nullable()->comment('Industry specific information');
            $table->unsignedInteger('introduced_by')->nullable()->index('enterprises_introduced_by_foreign')->comment('Company analyst that introduced ent');
            $table->unsignedInteger('analysed_by')->nullable()->index('enterprises_analysed_by_foreign')->comment('Company analyst id');
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
        Schema::dropIfExists('enterprises');
    }
}
