<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::create([
            'name' => 'MBTI'
        ]);

        Test::create([
            'name' => 'SDS'
        ]);

        Test::create([
            'name' => 'DiSC'
        ]);

    }
}
