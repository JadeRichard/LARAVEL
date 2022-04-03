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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstname');
            $table->integer('age');
            $table->string('telnumber');
            $table->string('email');
            $table->string('gender');
            $table->string('country');
            // $table->string('role');
            $table->foreignId("team_id")->nullable()->constrained("teams", "id")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId('role_id')->constrained("roles", "id")->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('players');
    }
};
