<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zeiterfassungs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->dateTime('kommen')->nullable();
            $table->dateTime('gehen')->nullable();
            $table->string('taetigkeit')->nullable();
            $table->longText('bemerkung')->nullable();
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('zeiterfassungs');
    }
};
