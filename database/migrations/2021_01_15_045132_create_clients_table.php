<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('civil_status');
            $table->string('purok');
            $table->string('barangay');
            $table->longText('contact_number', 11);
            $table->string('connection_type');
            $table->string('connection_status');
            $table->timestamps();
        });

        DB::update('ALTER TABLE clients AUTO_INCREMENT=1000;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
