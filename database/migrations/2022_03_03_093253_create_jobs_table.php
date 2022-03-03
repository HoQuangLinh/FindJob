<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jobName');
            $table->string('jobDesc');
            $table->string('jobBenefit');
            $table->string('jobRequirement');
            $table->string('jobAddress');
            $table->unsignedBigInteger('companyId');
            $table->foreign('companyId')->references('id')->on('companies');
            $table->unsignedBigInteger('jobCategoryId');
            $table->foreign('jobCategoryId')->references('id')->on('job_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}