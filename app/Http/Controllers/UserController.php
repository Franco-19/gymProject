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
        return (view('dashboard', $parametrosUser));
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
        // echo $user;
        // print_r($request->all());
        // print_r($request->ejercicio);
        // print_r($request->ejercicio["nombreEjercicio"]);
        // echo $request->ejercicio["nombreEjercicio"];
        $ejercicioDataJson = json_decode($request->ejercicio);
        // echo gettype($ejercicioDataJson);
        // print_r($ejercicioDataJson->idejercicios);
        // $ejercicio = $request->ejercicio;
        // echo $ejercicio->idejercicios;
        // echo $request;
        $user->rutina = $ejercicioDataJson->idejercicios;
        $user->save();

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
}
