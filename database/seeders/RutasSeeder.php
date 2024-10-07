<?php

namespace Database\Seeders;

use App\Models\rutas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutas1 = new rutas();
        $rutas1->nombre='Análisis';
        $rutas1->descripcion="Agregar, editar y dar de baja análisis";
        $rutas1->route="admin.catalogos.analisis";
        $rutas1->tipo="1";
        $rutas1->usuario="1";
        $rutas1->estado	="1";
        $rutas1->save();

        
        $rutas2 = new rutas();
        $rutas2->nombre='Especies';
        $rutas2->descripcion="Agregar, editar y dar de baja especies";
        $rutas2->route="admin.catalogos.especies";
        $rutas2->tipo="1";
        $rutas2->usuario="1";
        $rutas2->estado	="1";
        $rutas2->save();

        $rutas3 = new rutas();
        $rutas3->nombre='Metodos';
        $rutas3->descripcion="Agregar, editar y dar de baja metodos";
        $rutas3->route="admin.catalogos.metodos";
        $rutas3->tipo="1";
        $rutas3->usuario="1";
        $rutas3->estado	="1";
        $rutas3->save();

        $rutas4 = new rutas();
        $rutas4->nombre='Equipos';
        $rutas4->descripcion="Agregar, editar y dar de baja equipos";
        $rutas4->route="admin.inventarios.equipos";
        $rutas4->tipo="2";
        $rutas4->usuario="1";
        $rutas4->estado	="1";
        $rutas4->save();

        $rutas5 = new rutas();
        $rutas5->nombre='Reactivos';
        $rutas5->descripcion="Agregar, editar y dar de baja reactivos";
        $rutas5->route="admin.inventarios.reactivos";
        $rutas5->tipo="2";
        $rutas5->usuario="1";
        $rutas5->estado	="1";
        $rutas5->save();
    }
}
