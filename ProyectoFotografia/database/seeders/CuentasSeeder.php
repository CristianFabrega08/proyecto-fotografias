<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Cuentas;
use Illuminate\Support\Facades\DB;
class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Cuentas')->insert([
            ['user' => 'Artista1','password' => Hash::make('soyartista123'),'nombre' => 'MESSI','apellido' => 'DIOS','perfil_id' => 2,],
            ['user' => 'Administrador','password' =>Hash::make('soyadministrador123'),'nombre' => 'ALEXIS','apellido' => 'SANCHEZ', 'perfil_id' => 1,]
        ]);
    }
}
