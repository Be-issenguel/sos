<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            ['nome' => 'Luanda', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Benguela', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Bengo', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Lunda Sul', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Lunda Norte', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Malanje', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Cunene', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Cabinda', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Moxico', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Kwanza Norte', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Kwanza Sul', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Moxico', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Namibe', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Huila', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Huambo', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Cuando Cubango', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Bié', 'created_at' => now(), 'updated_at' => now()],
            ['nome' => 'Zaire', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}