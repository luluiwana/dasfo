<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Aspiration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_aspirations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('aspiration');
            $table->tinyInteger('sender_type');
            $table->string('name');
            $table->foreignIdFor(Aspiration::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_aspirations');
    }
};
