<?php

namespace App\Http\Controllers;

use App\Padron;


class HomeController extends Controller
{

    public function index()
    {
        $config = [
            'welcome'=>'Bienvenido a postulantes api rest',
            'rutas'=>'Rutas disponibles en el sistema',
            '/api/v1/postulantes'=>'muestra todos los datos',
            '/api/v1/postulante/{id}'=>'muestra el registro por id de los 5000, remplazo la palbra id por un numero',
            '/api/v1/postulante/rango/{ini}/{fin}'=>'muestra un rango de datos cambiar ini y fin por numeros',
        ];
        return response()->json($config, 200);
    }
    public function byid($id)
    {
        $postulante = Padron::where('id',$id)->get();
        return response()->json($postulante, 200);

    }
    public function postulantes()
    {
        $postulante = Padron::all();
        return response()->json($postulante, 200);

    }
    public function rango($inicio,$fin)
    {
        $postulante = Padron::whereBetween('id', [$inicio, $fin])->get();
        return response()->json($postulante, 200);
    }
}
