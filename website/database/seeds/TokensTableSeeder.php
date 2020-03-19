<?php

use Illuminate\Database\Seeder;

class TokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('tokens')->insert([
                'value' => str_repeat(strval($i), 20),
            ]);
        }
        
    }
}
