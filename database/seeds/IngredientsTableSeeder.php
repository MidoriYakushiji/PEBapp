<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'コッペパン',
            'type' => 1,
            'price' => 100,
            'img' => '../img/koppe.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => '全粒粉パン',
            'type' => 1,
            'price' => 150,
            'img' => '../img/zen.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => 'とろとろたまご',
            'type' => 2,
            'price' => 50,
            'img' => '../img/tamago.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => 'シャキシャキレタス',
            'type' => 2,
            'price' => 50,
            'img' => '../img/let.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => '厚切りベーコン',
            'type' => 2,
            'price' => 70,
            'img' => '../img/bacon.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => 'ハニーマスタード',
            'type' => 3,
            'price' => 30,
            'img' => '../img/mustard.jpg',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'name' => 'BBQソース',
            'type' => 3,
            'price' => 30,
            'img' => '../img/BBQ.jpg',
        ];
        DB::table('ingredients')->insert($param);
    }
}
