<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('citas.citas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * Cuando el usuario crea una reserva se guarda en la tabla citas y en la tabla historial.
     */
    public function create($id, $fecha, $hora)
    {
       /*  dd($id, $fecha, $hora); */
       //Devuelve false si tiene una reserva echa y true si no tiene reserva echa.
      if($this->compruebaSiTieneCita()){
       //Inserto en la tabla citas la cita reservada
        DB::table('citas')->insert([
            'fecha' => $fecha,
            'hora' => $hora,
            'id_usuario' => session('usuario'),
            ]);
        DB::table('historial')->insert([
            'fecha' => $fecha,
            'hora' => $hora,
            'id_usuario' => session('usuario'),
            ]);
        //Borro de la tabla citaslibres la cita reservada
        $this->destroy($id);
        return redirect('/citas/index')->with('succes','Cita reservada');
      }else{
          return redirect('/citas/index')->with('fault','Ya tienes una reserva echa anulala para hacer nueva reserva');
      }
    }


    public function store()
    {
        $citaUsuario = DB::table('citas')->where('id_usuario',session('usuario'))->get();
        /* dd($citaUsuario); */
        if($citaUsuario->isEmpty() ){
            return redirect('/citas/index')->with('fault','No tienes citas reservadas');
        }else {return view('citas.borrarcita',['citaUsuario'=>$citaUsuario->first()]);}

    }


    public function show()
    {   //Si el usuario esta logueado
        if(session()->has('usuario')){
            if($this->compruebaSiTieneCita()){
                $primeraLibre = DB::table('citaslibres')->first();
                return view('citas.citasreserva',[
                'citalibre'=>$primeraLibre,
                ]);
            }else  return redirect('/citas/index')->with('fault','El usuario ya tiene una cita disponible');
        } else {
            return redirect('/citas/index')->with('fault','El usuario no esta logueado');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return boolean
     */
    public function destroy($id)
    {
        DB::table('citaslibres')->where('id', $id)->delete();
    }
    private function compruebaSiTieneCita(){
        $idUsuario = session('usuario');
        //Si existe es que tiene una reserva ya retorna false , si no tiene una reserva retorna true
        if(DB::table('usuarios', 'u')
        ->join('citas AS c', 'u.id_usuario', '=', 'c.id_usuario')->where('c.id_usuario', $idUsuario)->exists()){
            return false;
        }else{return true;}
    }

    public function anularCita($id){
        DB::table('citas')->where('id_citas', $id)->delete();
        return redirect('/citas/index')->with('succes','Cita borrada con exito');
    }

    public function historial(){
        if(session()->has('usuario')){
        $historial = DB::table('historial')->where('id_usuario',session('usuario'))->get();
        return view('citas.historial',[
            'historial' => $historial,
        ]);
        }else {
            return redirect('/citas/index')->with('fault','El usuario no esta logueado');
        }
    }
}
