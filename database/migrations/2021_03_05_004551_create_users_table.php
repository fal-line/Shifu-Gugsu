<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('level_id')->default('6');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
            'name' => 'admin-service',
            'email' => 'admin@local',
            'level_id' => '1',
            'password' => $password = Hash::make('default')
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
        Schema::dropIfExists('users');
    }

    protected function dropSequence(string $table, string $column)
    {
        DB::select("DROP SEQUENCE IF EXISTS {$table}_{$column}_seq");
    }
}
