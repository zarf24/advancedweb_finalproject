<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id('projectid');
            $table->string('projectname');
            $table->string('category');
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->string('duration')->nullable();
            $table->string('cost')->nullable();
            $table->string('client')->nullable();
            $table->string('stage')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
