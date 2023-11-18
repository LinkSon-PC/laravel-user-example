<?php

use App\Estudiante;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *  
     * @return void
     */

    /** Crear seeders
     * php artisan make:seeder NameSedeer
     * 
     * ejecutar seeder
     * php artisan db:seed
     * 
     * borra db y ejecutar seed
     * php artisan migrate:fresh --seed
     */

    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ResultadoSedeer::class);
        $this->call(EstudianteSeeder::class);
    }
}
