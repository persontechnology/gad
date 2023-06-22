<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Autoridad;
use App\Models\Empresa;
use App\Models\Meses;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $em=Empresa::first();
        if(!$em){
            $em=new Empresa();
            $em->save();
        }

        $a=Autoridad::first();
        if(!$a){
            $a=new Autoridad();
            $a->save();
        }
            $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

            foreach ($meses as $mes) {
                 Meses::firstOrCreate(
                    ['nombre' => $mes]
                );
            }

    }
}
