<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tourism;
use App\User;
use Auth;

class AdminTourismController extends Controller
{

    public function index()
    {

        $tourisms = Tourism::all();

        return view('admin.tourism', compact('tourisms'));

    }
    
    public function create()
    {

        return view('admin.tourism-create');

    }

    public function store(Request $resquest)
    {

        $user = Auth::user();

        $nameFile = ' ';

        $resquest->all();

        if($resquest->hasFile('image_principal') && $resquest->file('image_principal')->isValid()){
            $name = uniqid(date('HisYmd'));
            $extension = $resquest->image_principal->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $resquest->image_principal->storeAs('tourism', $nameFile);
        
            if(!$upload){
                return redirect()->back()->with('error', 'Falha ao carregar a imagem!');
            }
        }

        $results = Tourism::create([
            'user_id'                       =>  $user->id,                    
            'image_principal'               =>  $nameFile,
            'name'                          =>  $resquest['name'],
            'description'                   =>  $resquest['description'], 
            ]);

        if($results = 0){
            return redirect()->back()->with('error', 'Erro ao cadastrar local!');
        } else {
            return redirect('admin/tourism')->with('success', 'Local cadastrado com suscesso!');
        }

    }

}
