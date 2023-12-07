<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('date_of_birth');
            $table->text('address');
            $table->string('subject_taught');
            $table->unsignedBigInteger('class_assigned_id');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
