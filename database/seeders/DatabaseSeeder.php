<?php

namespace Database\Seeders;

use App\Models\nivel_usuario;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $TipoUser1 = new nivel_usuario();
        $TipoUser1->id = 1;
        $TipoUser1->descripcion = "Administrador";
        $TipoUser1->save();

        $TipoUser2 = new nivel_usuario();
        $TipoUser2->id = 2;
        $TipoUser2->descripcion = "empleado";
        $TipoUser2->save();

        $user = new User();
        $user->name = "Luis Eduardo";
        $user->email = "lued1009@gmail.com";
        $user->password = bcrypt("Hmcnjsa1*.");
        $user->estatus = "1";
        $user->nivel_usuario = 1;
        $user->email_verified_at = '05/08/2024';
        $user->save();

        $this->call(RutasSeeder::class);
    }
}
