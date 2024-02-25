<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unemployment_rates', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('code');
            $table->float('y2010');
            $table->float('y2011');
            $table->float('y2012');
            $table->float('y2013');
            $table->float('y2014');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unemployment_rate');
    }
};
