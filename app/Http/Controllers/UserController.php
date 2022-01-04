<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parametrosUser = [
            "userData" => User::all(),
            "ejercicios" => Ejercicio::all(),
            'userId' => Auth::id()
        ];
        return (view('entrenamiento', $parametrosUser));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // modify this
        // echo $request;
        // echo $id;
        $id = Auth::id();
        $user = User::find($id);

        $ejercicioDataJson = json_decode($request->ejercicio);


        // $nombreDeEjercicio = $ejercicioDataJson;
        // $rutinaEnString = $ejercicioDataJson->rutina;
        // $rutinaEnArray=$this->transformarCadenaEnArray($rutinaEnString);
        // $longitudDeRutina = count($rutinaEnArray);
        // $posicionDelEjercicio = array_search($rutinaEnArray, $nombreDeEjercicio);

        // if ($posicionDelEjercicio !== false)
        // {
        // $segundaParteDeRutina = array_slice($rutinaEnArray, $posicionDelEjercicio+1);;
        // $primeraParteDeRutina = array_slice($rutinaEnArray,0,$posicionDelEjercicio);
        // $nuevaRutina = array_merge($primeraParteDeRutina,$segundaParteDeRutina);        } else {

        //     $nombreDeEjercicio = $ejercicioDataJson->nombreEjercicio;
        //     $ejerciciosArray = [];

        //     if(gettype($user->rutina) !== 'array'){
        //         $unaRutina = [$user->rutina];
        //         array_push($unaRutina,$nombreDeEjercicio);
        //         $user->rutina = $unaRutina;
        //         $unaRutina=[];
        //         $user->save();
        //     } else {
        //         $unaRutina = $user->rutina;
        //         array_push($unaRutina,$nombreDeEjercicio);
        //         $user->rutina = $unaRutina;
        //         $unaRutina=[];
        //         $user->save();
        //     }
        // }




        // if(gettype($user->rutina) !== 'array'){
        //     $unaRutina = [$user->rutina];
        //     array_push($unaRutina,$nombreDeEjercicio);
        //     $user->rutina = $unaRutina;
        //     $unaRutina=[];
        //     $user->save();
        // } else {
        //     $unaRutina = $user->rutina;
        //     array_push($unaRutina,$nombreDeEjercicio);
        //     $user->rutina = $unaRutina;
        //     $unaRutina=[];
        //     $user->save();
        // }

        // $user->rutina = [];
        // $user->save();



/*       */

        // parametros (revisar de eliminar cuando no sea necesario)
        $parametrosUser = [
            "userData" => User::all(),
            "ejercicios" => Ejercicio::all(),
            'userId' => Auth::id()
        ];

        return(view('dashboard', $parametrosUser));
        // return '200';
        // redict to home
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        $parametros = [
            'user' => $user
        ];

        return(view('getRutines', $parametros));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // modify this
        // echo $request;
        // echo $id;
        // $user = User::find($id);
        // echo $user;
        // echo $request;
        // $user->rutina = $request->ejercicio->NombreEjercicio;
        // $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function transformarCadenaEnArray($unaCadena)
    {
        $nuevoArray = explode ( ',', $unaCadena);
        return $nuevoArray;
    }




}

    //Decir la cantidad de ejercicios. count($unaRutina);
    //Buscar un Ejercicio array_search($unaRutina, $unEjercicio);
