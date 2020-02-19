@extends('layouts.app')

@section('content')
<div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading">Bem vindo!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está logado!
                </div>
            </div>
        </div>
   
</div>
<div class="container">
   <!--Cadastrar Agente e Curso-->
   <div class="col-md-3"></div>
    
    <a href="{{route('agente.create')}}" style="text-decoration: none; font-weight: bold;" >
        <div class="col-md-3">
            <div class="panel panel-primary" align="center">
                <div class="panel-heading">Cadastrar Agente</div>
                <div class="panel-body" style="text-align: center;">
                    <i class="glyphicon glyphicon-plus" style = "font-size: 50px"></i>
                </div>
            </div>
        </div>
    </a>

 
    <a href="{{route('curso.create')}}" class="" style="text-decoration: none; font-weight: bold;">
        <div class="col-md-3">
            <div class="panel panel-primary" align="center">
                <div class="panel-heading">Cadastrar Curso</div>
                <div class="panel-body" style="text-align: center;">
                    <i class="glyphicon glyphicon-plus" style = "font-size: 50px"></i>
                </div>
            </div>
        </div>
    </a>
    <div class="col-md-3"></div>
    <!--fim do Cadastrar Agente e Curso-->

    <div class="row"></div>
    
    <!--Pesquisar Agente e Curso-->
    <div class="col-md-3"></div>
    <a href="{{route('agente.show')}}" style="text-decoration: none; font-weight: bold;" >
        <div class="col-md-3">
            <div class="panel panel-primary" align="center">
                <div class="panel-heading">Pesquisar Agente</div>
                <div class="panel-body" style="text-align: center;">
                    <i class="glyphicon glyphicon-search" style = "font-size: 50px"></i>
                </div>
            </div>
        </div>
    </a>

 
    <a href="{{route('curso.show')}}" style="text-decoration: none; font-weight: bold;">
        <div class="col-md-3">
            <div class="panel panel-primary" align="center">
                <div class="panel-heading">Pesquisar Curso</div>
                <div class="panel-body" style="text-align: center;">
                    <i class="glyphicon glyphicon-search" style = "font-size: 50px"></i>
                </div>
            </div>
        </div>
    </a>
    <!--Fim do Pesquisar Agente e Curso-->
   
</div>
@endsection
