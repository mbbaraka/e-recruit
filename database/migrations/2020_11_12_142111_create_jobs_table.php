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
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('location')->nullable();
            $table->string('job_type')->nullable();
            $table->string('deadline');
            $table->string('qualification')->nullable();
            $table->string('vacancies')->nullable();
            $table->string('experience')->nullable();
            $table->enum('status', ['0', '1']);
            $table->string('document')->nullable();
            $table->timestamps();

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
