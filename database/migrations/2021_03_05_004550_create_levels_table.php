<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
        });
        
        // Insert some stuff
        DB::table('levels')->insert(
            array(
                'id' => '1',
                'type' => 'admin',
            )
        );
        DB::table('levels')->insert(
            array(
                'id' => '2',
                'type' => 'waiter',
            )
        );
        DB::table('levels')->insert(
            array(
                'id' => '3',
                'type' => 'cashier',
            )
        );
        DB::table('levels')->insert(
            array(
                'id' => '4',
                'type' => 'customer',
            )
        );
        DB::table('levels')->insert(
            array(
                'id' => '5',
                'type' => 'owner',
            )
        );
        DB::table('levels')->insert(
            array(
                'id' => '6',
                'type' => 'not-verified',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
