<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::OrderBy('name','ASC')->paginate(15);
        return view('admin/users/index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($file=$request->file('imagen')){
            $file=$request->file('imagen');
            $name= 'usuario_'.time(). ".".$file->getClientOriginalExtension();
            $path=public_path()."/imagenes/usuarios/";
            $file->move($path,$name);

            $usuario= new User($request->all());
            $usuario->rol=$request->rol;
            $usuario->imagen=$name;
            $usuario->name=$request->name;
            $usuario->apellido=$request->apellido;
            $usuario->cedula=$request->cedula;
            $usuario->password=bcrypt($request->password);
            $usuario->save();
        }
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("Hola----------->");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view('admin/users/edit',['usuario'=>$usuario]); 
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
      $usuario = User::find($id);
      $usuarios = User::all();
      $flagCorreo = false;

      foreach ($usuarios as $user) {
        if($user->email == $request->email && $user->id != $id){
          $flagCorreo = true;
        }
    }

    if ($flagCorreo == true) {
        return redirect()->route('electronica.users.edit',$id);
    }

    if ($flagCorreo == false) {    
        $usuario->name=$request->name;
        $usuario->email=$request->email;
        $usuario->password=bcrypt($request->password);

        $usuario->save();

        return redirect()->route('electronica.users.index');
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = User::find($id);
      $usuario->delete();
      Flash::warning('Se ha eliminado de forma éxitosa el usuario');
      return redirect()->route('electronica.users.index');
    }
}
