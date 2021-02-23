<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                'name' => 'Formation type 1'
            ],
            [
                'name' => 'Formation type 2'
            ],
            [
                'name' => 'Formation type 3'
            ],
            [
                'name' => 'Formation type 4'
            ],
            [
                'name' => 'Formation type 5'
            ],
            [
                'name' => 'Formation type 6'
            ],
            [
                'name' => 'Formation type 7'
            ],
            [
                'name' => 'Formation type 8'
            ],
            [
                'name' => 'Formation type 9'
            ],
            [
                'name' => 'Formation type 10'
            ],
        ]);
    }
}
