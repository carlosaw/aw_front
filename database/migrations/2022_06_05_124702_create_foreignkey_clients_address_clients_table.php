<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeyClientsAddressClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->foreign('address_id')
            ->references('id')
            ->on('addresses')
            ->onDelete('SET NULL');
            // // ->onUpdate('CASCADE');

            // $table->foreign('vehicle_id')
            // ->references('id')
            // ->on('vehicles')
            // ->onDelete('SET NULL');
            // //->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
            $table->dropForeign('address_id');
        });
    }
}
