<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BaseModel;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = BaseModel::all();
        
        foreach ($info as $item){
        DB::table('codigopostal')->insert([
            'codigo' => $item->codigo,
            'asentamiento' => $item->asentamiento,
            'tipo_asenta' => $item->tipo_asenta,
            'municipio' => $item->municipio,
            'estado' => $item->estado,
            'ciudad' => $item->ciudad,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            ]);  
       }
    }
}
