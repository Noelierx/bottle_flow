<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'pseudo' => 'Andros',
            'email' => 'nonorx@gmail.com',
            'password' => bcrypt('secret'),
            'first_name' => 'Noellie',
            'last_name' => 'Compotedepomme',
            'country' => 'France',
            'status' => true
        ]);

        User::create([
            'pseudo' => 'Maxipierro',
            'email' => 'drifts@gmail.com',
            'password' => bcrypt('secret'),
            'first_name' => 'Pierre',
            'last_name' => 'Dorifuto',
            'country' => 'France',
            'status' => true
        ]);

        User::create([
            'pseudo' => 'Zila',
            'email' => 'chomdu@gmail.com',
            'password' => bcrypt('secret'),
            'first_name' => 'Flavien',
            'last_name' => 'EfEfKatorz',
            'country' => 'France',
            'status' => true
        ]);

        User::create([
            'pseudo' => 'Ouleb',
            'email' => 'kwek@gmail.com',
            'password' => bcrypt('secret'),
            'first_name' => 'Aimee',
            'last_name' => 'Anonymous',
            'country' => 'France',
            'status' => true
        ]);

        User::create([
            'pseudo' => 'Siliace',
            'email' => '1664@gmail.com',
            'password' => bcrypt('secret'),
            'first_name' => 'BenYamin',
            'last_name' => 'GroVentre',
            'country' => 'France',
            'status' => true
        ]);
    }
}
