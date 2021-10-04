<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_disease');
            $table->string('symptoms');
            $table->integer('user_id');
            $table->integer('doctor_id');
            $table->string('date');
            $table->text('medicine'); // Medicine 1, Medicine 2
            $table->text('procedure_to_use_medicine');
            $table->text('feedback');
            $table->text('signature');
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
        Schema::dropIfExists('prescriptions');
    }
}
