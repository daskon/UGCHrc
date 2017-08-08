<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentComplainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_complains', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('case_number')->unique();
            $table->bigInteger('received')->unsigned()->default(0);
            $table->string('complain_subject',30);
            $table->string('priority',6);
            $table->string('contact_person',30);
            $table->string('nic_number',10)->unique();
            $table->string('address',50);
            $table->date('complained_date');
            $table->bigInteger('contact_number')->unsigned();
            $table->date('response_before');
            $table->bigInteger('v_id')->unsigned();
            $table->foreign('v_id')->references('id')->on('violations');
            $table->string('complain',200);
            $table->string('attachement',255);
            $table->bigInteger('status')->unsigned()->default(1);
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
        Schema::dropIfExists('student_complains');
    }
}
