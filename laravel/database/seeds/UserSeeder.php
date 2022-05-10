<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'password' => Hash::make('test1234'),
        ]);

        User::create([
            'name' => 'test2',
            'email' => 'test2@test.com',
            'password' => Hash::make('test1234'),
        ]);
    }
}
