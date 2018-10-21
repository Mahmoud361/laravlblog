<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for ($i=0;$i<10;$i++) {
            DB::table('students')->insert([
                'fristName' => str_random(10),
                'lastName' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'address' => str_random(15),
            ]);
        }
    }
}
