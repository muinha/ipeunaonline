<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\User;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.home');

    }

    public function userCreate()
    {

        return view('admin.user-create');

    }


    public function postUserCreate(Request $request)
    {

        $request->all();

        $results = User::create([
            'name'              =>  $request['name'],
            'email'             =>  $request['email'],
            'login'             =>  $request['login'],
            'password'          =>  $request['password'],
            'hierarquia'        =>  $request['hierarquia'],
        ]);

        if(count($results) == 0){
            throw new Exception("Erro ao Cadastrar o usuário !!", 1);           
        } else {
            return redirect('admin/users')->with('status', 'Perfil Criado !!');
        }

    }

    public function users()
    {

        $users = User::all();

        return view('admin.users', compact('users'));

    }

    public function usersUpdate($id)
    {

        $user = User::find($id);

        return view('admin.users-edit', compact('user'));

    }


    public function userUpdate()
    {

        return view('admin.user-edit');

    }

    public function postUserUpdate(Request $request)
    {

        $request->all();

        $usuário = Auth::user();

        $results = DB::table('users')
        ->where('id', $usuário['id'])
        ->update([
            'name'              =>  $request['name'],
            'email'             =>  $request['email'],
            'login'             =>  $request['login'],
            'password'          =>  $request['password'],
            'hierarquia'        =>  $request['hierarquia'],
        ]);

        if(count($results) == 0){
            throw new Exception("Erro ao editar o usuário", 1);            
        } else {
            return redirect('admin/users')->with('status', 'Usuário editado');
        }

    }
}