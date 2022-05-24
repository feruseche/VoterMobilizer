<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotersTable extends Migration
{
    public function up() : void
    {
        Schema::create('voters', function (Blueprint $table) {
            $table->engine    = "InnoDB";
            $table->comment  = "Voters";
            
            $table->smallIncrements('id');
            $table->string("dni");
            $table->string("name");
            $table->string("lastname");
            $table->string("address");
            $table->string("mobile");
            $table->string("email");
        });

        Schema::table('voters', function (Blueprint $table) {
            $table->unsignedSmallInteger('sector_id')->after('email');
            $table->unsignedSmallInteger('voting_center_id')->after('sector_id');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('restrict');
            $table->foreign('voting_center_id')->references('id')->on('voting_centers')->onDelete('restrict');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('voters');
    }
}
