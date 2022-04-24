<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlaubsTable extends Migration
{
    public function up()
    {
        Schema::create('urlaubs', function (Blueprint $table) {
            $table->id();

            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('urlaubs');
    }
}
