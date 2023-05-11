<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'apellidos' => 'Pérez',
                'nombre' => 'Juan',
                'documento' => '12345678',
                'direccion' => 'Calle 123',
                'telefono' => '555-1234',
                'email' => 'juan.perez@example.com',
                'created_at' => now(),
                'updated_at' => now()
            ]]);
    }
}
