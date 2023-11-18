<?php

use App\Resultado;
use Illuminate\Database\Seeder;

class ResultadoSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $resultado1 = new Resultado();
        $resultado1->nombre = "Satisfactorio";
        $resultado1->save();

        $resultado2 = new Resultado();
        $resultado2->nombre = "Insatisfactorio";
        $resultado2->save();
    }
}
