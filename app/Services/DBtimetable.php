<?php

namespace App\Services;

use App\Models\Timetable;
use Illuminate\Http\Request;

class DBtimetable
{
    /**
     *
     * Извлечение данных из базы
     */
    public function builder(){
        $timetable = Timetable::all();

        return $timetable;
    }

    /**
     * Запись данных в базу
     */
    public function inner($request){
        $input = $request->all();

        $dayarr = ['Понедельник','Вторник','Среда','Четверг','Пятница','Суббота'];

        foreach ($input as $key => $value){
            if (''==$value){
                $value = 'zero';
            }

            $timetable = new Timetable();
            $timetable->curs = $input['formcurs'];
            $timetable->gr = $input['formgr'];

            if("_token"!=$key&&"formcurs"!=$key&&"formgr"!=$key){
                // Массив дней с нуля, а предметы с формы с 1, поэтому -1
                $day = $key[4]-1;
                $para = $key[5];

                $timetable->day = $dayarr[$day];

                $timetable->para = $para;
                $timetable->pred = $value;
                $timetable->save();

            }
        }
    }
}
