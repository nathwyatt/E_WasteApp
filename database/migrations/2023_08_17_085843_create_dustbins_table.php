<?php

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
        Schema::create('dustbins', function (Blueprint $table) {
            $table->id();
            $table->string('Block-name');
            $table->string('Type');
            $table->string('Created-at');
            $table->string('Block-supervisor');
            $table->timestamps('Action');

        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dustbins');
    }
};
