<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function(Blueprint $table){
        $table->string('lastName');
        $table->date('birthday');
        $table->string('provincia');
        $table->integer('phone');
        $table->integer('level');
        $table->string('avatar');
        $table->string('cargo');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('users', function (Blueprint $table) {
  $table->dropColumn(['lastName', 'birthday', 'provincia', 'phone',  'level', 'avatar', 'cargo']);
});
    }
}
