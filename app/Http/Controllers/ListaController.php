<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Aluno;

class ListaController extends Controller
{
    public function create()
    {
        return view('front.create');
    }

    public function store(Request $_request)
    {
        Aluno::create($_request->all());
        return redirect()->route('front-index');
    }

    public function login()
    {
        return view('front.login');
    }

    public function authen(Request $_request)
    {
        $this->validate($_request,[
            'email' => 'required',
            'password' => 'required'],[
            'email.required' => 'O e-mail é obrigatorio',
            'password.required' => 'A senha é obrigatoria']
        );

        if(Auth::attempt(['email'=> $_request->email, 'password'=> $_request->password])){
            $alunos = Aluno::all();
            return view('front.lista_alunos',['alunos'=>$alunos]);
        }
        else{
            return redirect()->back()->with('danger','E-mail ou senha invalidos');
        }
    }

}

