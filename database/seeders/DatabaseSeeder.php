<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Aditya Aristiandi',
            'role' => 'HRD',
            'username' => 'HRD001',
            'password' => bcrypt('arnonbakery'),
            'gender' => 'Laki-laki',
            'birthplace' => 'Jakarta',
            'birthday' => '1988-01-01',
            'address' => 'Bali',
            'phone' => '0811-2293-766',
            'email' => 'recruitment@arnonbakery.com',
            'department' => 'Human Resources'
        ]);

        \App\Models\User::create([
            'name' => 'Samuel Dave Dharmadi',
            'role' => 'User',
            'username' => 'USER001',
            'password' => bcrypt('arnonbakery'),
            'gender' => 'Laki-laki',
            'birthplace' => 'Jakarta',
            'birthday' => '1988-01-01',
            'address' => 'Banten',
            'email' => 'samueldave@gmail.com',
            'phone' => '85647910',
            'department' => 'IT'
        ]);

        \App\Models\User::create([
            'name' => 'Joshua Soeng',
            'username' => 'ADMIN001',
            'role' => 'Admin',
            'password' => bcrypt('arnonbakery'),
            'gender' => 'Laki-laki',
            'birthplace' => 'Jakarta',
            'birthday' => '1988-01-01',
            'address' => 'Bali',
            'email' => 'joshuasoeng@gmail.com',
            'phone' => '85647910',
            'department' => 'IT'
        ]);

        \App\Models\User::create([
            'name' => 'Fitriana Isnaini',
            'role' => 'User',
            'username' => 'USER002',
            'password' => bcrypt('arnonbakery'),
            'gender' => 'Perempuan',
            'birthplace' => 'Jakarta',
            'birthday' => '1988-01-01',
            'address' => 'Jakarta',
            'email' => 'fitrianaisnaini@gmail.com',
            'phone' => '85647910',
            'department' => 'IT'
        ]);

        $this->call([
            TestSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            ResultCategorySeeder::class,
        ]);

    }
}
