<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedummyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dummy', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('first_column',10)->comment('1-student, 2-parent, 3-teacher, 4-admin');
            $table->integer('second_column')->comment('1 - Yes, 0 - No');
            $table->decimal('third_column')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->bigInteger('phone_no');
            $table->text('address');
            $table->date('due_date');
            $table->enum('status', array('0','1'))->comment('0 - In-active, 1 - Active');
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
        Schema::dropIfExists('dummy');
    }
}
