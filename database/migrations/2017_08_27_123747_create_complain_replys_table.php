<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain_replys', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id_reply')->unsigned();
            $table->string('case_number_reply',20)->unique();
            $table->string('response');
            $table->date('response_date');
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
        Schema::dropIfExists('complain_replys');
    }
}
