<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 755)->comment('Pool company name');
            $table->string('slug')->nullable()->comment('Pool code autogenerated');
            $table->text('profile')->comment('Enterprise profile');
            $table->string('growth_stage')->comment('Growth stage of the enterprise');
            $table->string('logo')->nullable()->default('default/company.png')->comment('Enterprise Logo');
            $table->unsignedInteger('exp')->nullable()->comment('Year enterprise started business');
            $table->year('regdate')->nullable()->comment('Year company joined incubator ');
            $table->longText('data_available')->nullable()->comment('Available financial information');
            $table->longText('countries')->nullable()->comment('Countries enterprise operates in');
            $table->unsignedInteger('incubator_id')->nullable()->index('pools_incubator_id_foreign')->comment('ID of the belonging incubator');
            $table->unsignedInteger('industry_id')->index('pools_industry_id_foreign')->comment('ID of the belonging industry');
            $table->unsignedInteger('managed_by')->index('pools_managed_by_foreign')->comment('ID of the incubator staff managing this pool');
            $table->tinyInteger('suspended')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['id', 'growth_stage']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pools');
    }
}