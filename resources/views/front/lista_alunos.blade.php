@extends('layouts.app')

@section('title', 'Alunos Cadastrados')

@section('content')

    <h1><center>Lista de Alunos Cadastrados</center></h1>
    <hr>

    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Curso</th>
            <th scope="col">Idade</th>
            <th scope="col">Período</th>
            <th scope="col">Estagiando</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
                <tr>
                <th>{{$aluno->id}}</th>
                <td>{{$aluno->Nome}}</td>
                <td>{{$aluno->Curso}}</td>
                <td>{{$aluno->Idade}}</td>
                <td>{{$aluno->Periodo}}</td>
                <td>{{$aluno->Estagiando}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection