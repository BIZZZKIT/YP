<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
           'login' => 'maxim',
            'password' => Hash::make('12345678'),
            'surname' => 'dfjhskdfjh',
            'name' => 'fksjdfhksdjfh',
            'patronymic' => 'fksjdfhksdjh',
            'phone' => '1234567890',
            'isAdmin' => false,
            'email' => 'maxim@mail.ru',
        ]);
        User::insert([
            'login' => 'admin',
            'password' => Hash::make('12345678'),
            'surname' => 'jhgjhg',
            'name' => 'dasdas',
            'patronymic' => 'sfdsdf',
            'phone' => '1234567890',
            'isAdmin' => true,
            'email' => 'admin@mail.ru',
        ]);
    }
}
