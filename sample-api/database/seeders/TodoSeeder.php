<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i < 8; $i++){
            DB::table('todo')->insert([
                'id' => $i,
                'title' => Str::random(10).'の作業',
                'contents' => Str::random(10).'の内容',
                'deadline' => '2022/02/0'.$i,
                'complate' => false,
            ]);
        }
        
    }
}