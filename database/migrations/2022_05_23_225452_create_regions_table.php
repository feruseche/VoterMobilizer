<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    public function up() : void
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->engine    = "InnoDB";
            $table->comment  = "Regions of the municipality";
            
            $table->smallIncrements('id');
            $table->string("name");
            $table->string("leader");
            $table->string("email");
            $table->string("mobile");
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('regions');
    }
}
