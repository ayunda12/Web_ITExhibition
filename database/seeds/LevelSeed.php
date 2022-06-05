<?php

use App\Level;
use Illuminate\Database\Seeder;

class LevelSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::insert([
            [
                'id' => 1,
                'nama' => "Admin"
            ],
            [
                'id' => 2,
                'name' => "Exhibitor"
            ],
            [
                'id' => 3,
                'name' => "Visitor"
            ]
        ]);
    }
}
