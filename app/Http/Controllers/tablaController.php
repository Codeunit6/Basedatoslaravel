<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseModel;

class tablaController extends Controller
{
    public function mostrarinformacion1(){
        $informacion = BaseModel::all();
        foreach ($informacion as $info){
        echo "<table border='1'";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Contenido</th>";
        echo "</tr>";
       
            echo "<tr>";
            echo "<td>".$info->Id."</td>";
            echo "<td>".$info->ciudad."</td>";
            echo "<td>".$info->codigo ."</td>";
        
        echo "</table";
        }
        return view('hola');
    }
}
