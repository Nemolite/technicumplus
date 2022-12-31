<?php

namespace App\Services;

use App\Models\Timetable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBtimetable
{
    /**
     *
     * Извлечение данных из базы
     */
    public function builder($curs,$gr){

        $dayarr = array(
            1=>'Понедельник',
            2=>'Вторник',
            3=>'Среда',
            4=>'Четверг',
            5=>'Пятница',
            6=>'Суббота'
        );

        $raspis_count = DB::table('timetables')
            ->where('curs', '=', $curs)
            ->where('gr', '=', $gr)
            ->doesntExist();
        // обнуляем массив
        $out_raspis = [];

        if ($raspis_count) {
            // если в бд нет данных, то массив заполняем строками ------
           for($i=1;$i<=6;$i++){
                for($j=1;$j<=6;$j++){
                    $key_ras = 'pred' . $i . $j;
                    $out_raspis[$key_ras] = '------';
                }
            }
        } else {
            // если есть данные в бд, то массив запоняем из бд
            $raspis = DB::table('timetables')
                ->where('curs', '=', $curs)
                ->where('gr', '=', $gr)
                ->get();

            foreach ($raspis as $one_ras) {
                // формируем pred66 - 4-позиция в строке день, 5-позиция в строке - пара
                $key_ras = 'pred' . array_search($one_ras->day, $dayarr) . $one_ras->para;
                $val_ras = $one_ras->pred;
                if ('zero'==$val_ras){
                    $out_raspis[$key_ras] = '------';
                } else {
                    $out_raspis[$key_ras] = $val_ras;
                }

            } // foreach
        } // else

        return $out_raspis;
    }

    /**
     * Запись данных в базу
     */
    public function inner($request){
        $input = $request->all();

        $dayarr = array(
            1=>'Понедельник',
            2=>'Вторник',
            3=>'Среда',
            4=>'Четверг',
            5=>'Пятница',
            6=>'Суббота'
        );

        foreach ($input as $key => $value){
            if (''==$value){
                // если нет занятия то zero (для записи в базу)
                $value = 'zero';
            }

            if("_token"!=$key&&"formcurs"!=$key&&"formgr"!=$key&&"save"!=$key){
                // pred66 - 4-позиция в строке день, 5-позиция в строке - пара
                $day = $key[4];
                $para = $key[5];

                DB::table('timetables')
                    ->updateOrInsert(
                        ['curs' => $input['formcurs'], 'gr' => $input['formgr'], 'para' => $para,'day'=>$dayarr[$day]],
                        ['pred'=>$value]
                    );
            }
        }
    }

}
