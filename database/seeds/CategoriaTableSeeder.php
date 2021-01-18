<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            ['descricao' => 'Ambiente', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Saúde', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Habitação', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Energia', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Água Potavel', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Educação', 'created_at' => now(), 'updated_at' => now()],
            ['descricao' => 'Saneamento Básico', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}