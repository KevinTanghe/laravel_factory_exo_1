<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                'name' => 'HTML',
                'description' => 'Formation HTML',
            ],
            [
                'name' => 'CSS',
                'description' => 'Formation CSS',
            ],
            [
                'name' => 'JS',
                'description' => 'Formation JS',
            ],
            [
                'name' => 'DOM',
                'description' => 'Formation DOM',
            ],
            [
                'name' => 'WORDPRESS',
                'description' => 'Formation WORDPRESS',
            ],
            [
                'name' => 'PHOTOSHOP',
                'description' => 'Formation PHOTOSHOP',
            ],
        ]);
    }
}
