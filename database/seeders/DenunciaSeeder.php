<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DenunciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 1',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-17.78629',
            'longitud' => '-63.18117',
            'id_usuario'=>1,
            'id_estado'=>1,
            'id_tipo'=>1,
        ]);
        
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 2',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-17.79199700900285',
            'longitud' => '-63.17901724479251',
            'id_usuario'=>1,
            'id_estado'=>2,
            'id_tipo'=>2
        ]);
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 3',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-1123234',
            'longitud' => '-234543',
            'id_usuario'=>1,
            'id_estado'=>1,
            'id_tipo'=>2
        ]);
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 4',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-17.780324508564355',
            'longitud' => '-63.15356256879254',
            'id_usuario'=>1,
            'id_estado'=>3,
            'id_tipo'=>3
        ]);
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 5',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-17.775024834912024',
            'longitud' => '-63.17404335694142',
            'id_usuario'=>1,
            'id_estado'=>2,
            'id_tipo'=>2
        ]);
        DB::table('denuncias')->insert([
            'titulo' => 'titulo 6',
            'descripcion' => 'descripcion de la denuncia',
            'fecha_creacion' => '17-04-2023',
            'latitud' => '-17.785677076041765',
            'longitud' => '-63.18611303788304',
            'id_usuario'=>1,
            'id_estado'=>1,
            'id_tipo'=>1
        ]);
    }
}
