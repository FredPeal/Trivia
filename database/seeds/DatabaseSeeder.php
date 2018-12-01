<?php

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
        // $this->call(UsersTableSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(TriviaSeeder::class);
         $this->call(PreguntasSeeder::class);
         $this->call(RespuestaSeeder::class);

    }
}
