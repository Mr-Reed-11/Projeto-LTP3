@extends('layouts.app')

@section('title', 'Cadastro de Aluno')

@section('content')
    <div class='container mt-5'>
        <center><h1>Cadastro do Aluno</h1></center>
        <hr>
        <br>
        <form action='{{route("front-store")}}' method='POST'>
            @csrf
            <div class='form-group'>
                <div class='form-group'>
                    <label for='Nome'>Nome:</label>
                    <input type='text' class='form-control' name='nome' placeholder="Nome do Aluno">
                </div>
                <div class='form-group'>
                    <label for='Curso'>Curso:</label>
                    <input type='text' class='form-control' name='curso' placeholder="Curso do Aluno">
                </div>
                <div class='form-group'>
                    <label for='Idade'>Idade:</label>
                    <input type='number' min='0' max='100' class='form-control' name='idade' placeholder="Idade do Aluno">
                </div>
                <div class='form-group'>
                    <label for='Perido'>Periodo:</label>
                    <input type='number' min='1' max='10' class='form-control' name='perido' placeholder="Periodo do Aluno">
                </div>
                <div class='form-group'>
                    <label for='Estagiando'>Estagiando:</label><br>
                    <input type="radio" id="sim" name="res_estagio" value="Sim" >
                    <label for="sim">Sim</label>
                    <input type="radio" id="nao" name="res_estagio" value="Não">
                    <label for="nao">Não</label>
                </div>
                <center><input type="submit" name='submit' class='btn btn-primary' value="Confirma Informações"></center>
            </div>
        </form>
    </div>
@endsection