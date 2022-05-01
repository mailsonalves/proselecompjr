<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membro;

class MembroController extends Controller
{
    
    public function index(){
        
        return view('welcome');
    }
   
public function create(){
    return view('membros.create');
}
public function membros(){
    
    $search = request('search');

    if($search){
        $membross = Membro::where([['nome', 'like', '%'.$search.'%']])->get();
        return view('membros',[ 'membross' => $membross, 'search'=>$search]);

    }
    else{
        $membross = Membro::all();
        return view('membros',[ 'membross' => $membross, 'search'=>$search]);

    }
     
    
}
public function store(Request $request){
    $membro = new Membro;

    $membro->nome = $request->nome;
    $membro->cargo = $request->cargo;
    $membro->save();
    return redirect('/dashboard');
}

}
