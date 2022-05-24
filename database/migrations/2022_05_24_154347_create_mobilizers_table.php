<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilizersTable extends Migration
{
    public function up() : void
    {
        Schema::create('mobilizers', function (Blueprint $table) {
            $table->engine    = "InnoDB";
            $table->comment  = "Mobilizers";
            
            $table->smallIncrements('id');
            $table->string("dni");
            $table->string("name");
            $table->string("lastname");
            $table->string("address");
            $table->string("mobile");
            $table->string("email");
        });

        Schema::table('mobilizers', function (Blueprint $table) {
            $table->unsignedSmallInteger('sector_id')->after('email');
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('restrict');
        });
    }

    public function down() : void
    {
        Schema::dropIfExists('mobilizers');
    }
}
