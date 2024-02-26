<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $data = [
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'razon_social' => 'Empresa XYZ',
            'cedula' => '123456789',
            'telefono' => '3101234567',
            'pais' => 'Colombia',
            'ciudad' => 'Cali',
        ];

        try {
            $empleado = new Empleado($data);
            $empleado->save();
        } catch (\Exception $e) {
            echo "Error al guardar el empleado: " . $e->getMessage();
        }
    }
}
