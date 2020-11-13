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
            $table->id();
            $table->string('projectName');
            $table->string('subName');
            $table->string('client');
            $table->string('location');
            $table->string('surfaceArea');
            $table->string('value');
            $table->string('architech');
            $table->string('tag');
            $table->string('innerHeading');
            $table->text('innerHeadingContent');
            $table->string('imgmain');
            $table->string('innerimg1');
            $table->string('innerimg2');
            $table->string('innerimg3');
            $table->string('innerimg4');

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
