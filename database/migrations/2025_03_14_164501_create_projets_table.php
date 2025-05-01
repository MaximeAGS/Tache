<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('department_id')->nullable(); 
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['not_started', 'in_progress', 'on_hold', 'completed'])->default('not_started');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
