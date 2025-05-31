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
    Schema::table('proyeks', function (Blueprint $table) {
        $table->string('status')->default('Proposal');
    });
}

public function down()
{
    Schema::table('proyeks', function (Blueprint $table) {
        $table->dropColumn('status');
    });
}
    };