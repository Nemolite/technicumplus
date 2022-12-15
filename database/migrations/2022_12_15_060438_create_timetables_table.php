<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->integer('curs'); // 1,2,3,4 - четыре курса
            $table->string('gr',20); // 1ИП,2ИП,3ИП,4ИП итд  группы
            $table->integer('para'); // 1,2,3,4,5,6 - шесть пар в день
            $table->string('day',30);  // Понедельник, Вторник - дни недели
            $table->string('pred',50);  // Предметы
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
        Schema::dropIfExists('timetables');
    }
}
