<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorsTable extends Migration
{
    public function up() : void
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->engine    = "InnoDB";
            $table->charset   = "utf8";
            $table->collation = "uft8_unicode_ci";
            $table->comment  = "Sectors of the regions";
            
            $table->smallIncrements('id');
            $table->string("name");
            $table->string("leader");
            $table->string("email");
            $table->string("mobile");        
        });

        Schema::table('sectors', function (Blueprint $table) {
            $table->unsignedSmallInteger('region_id')->after('mobile');
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }
    
    public function down() : void
    {
        Schema::dropIfExists('sectors');
    }
}
