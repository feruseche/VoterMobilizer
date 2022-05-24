<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotingCentersTable extends Migration
{
    public function up() : void
    {
        Schema::create('voting_centers', function (Blueprint $table) {
            $table->engine    = "InnoDB";
            $table->comment  = "Voting centers";
            
            $table->smallIncrements('id');
            $table->string("code");
            $table->string("name");
            $table->string("address");
        });

        Schema::table('voting_centers', function (Blueprint $table) {
            $table->unsignedSmallInteger('region_id')->after('address');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('restrict');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('voting_centers');
    }
}
