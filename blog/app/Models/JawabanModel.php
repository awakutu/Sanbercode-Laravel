<?php
    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class JawabanModel
    {

        public static function indexById($pertanyaan_id)
        {
            $pertanyaan = DB::table('pertanyaan')->where('id',$pertanyaan_id) -> first();
            $jawaban= DB::table('jawaban')->where('pertanyaan_id',$pertanyaan_id)->get();
            $items = [
                'pertanyaan' => $pertanyaan,
                'jawaban' => $jawaban];
            return $items;
        }

        public static function save($data)
        {
            $new_item = DB::table('jawaban')->insert($data);
            return $new_item;
        }
    }
?>