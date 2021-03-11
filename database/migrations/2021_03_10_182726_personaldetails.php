<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personaldetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personaldetais', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('userid')->references('id')->on('users');
            $table->string('title')->nullable();;
            $table->string('applellative')->nullable();;
            $table->string('phone')->nullable();;
            $table->date('dob')->nullable();;
            $table->string('unique')->nullable();
            $table->string('bank')->nullable();;
            $table->string('bankaccount')->nullable();;
            $table->longText('note')->nullable();;
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('personaldetais');
    }
}
