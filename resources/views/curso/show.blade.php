@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Cursos</div>
                    <div class="panel-body">
                        <div class="row col-md-12">

                            @if(session('delete') == true)
                                <div class="col-md-2"></div>
                                <div class="alert alert-success col-md-8 text-center">
                                    <strong>Sucesso!</strong>
                                    O Curso {{ session('nome') }} foi removido.
                                </div>
                            @elseif(session('insert') == true)
                                <div class="col-md-3"></div>
                                <div class="alert alert-success col-md-6 text-center">
                                    <strong>Sucesso!</strong>
                                    O Curso {{ old("nome") }} foi adicionado.
                                </div>
                            @elseif(session('update') == true)
                                <div class="col-md-2"></div>
                                <div class="alert alert-success col-md-8 text-center">
                                    <strong>Sucesso!</strong>
                                    O Curso {{ old('nome') }} foi atualizado.
                                </div>
                            @endif
                          <form method="GET" action="{{route('curso.show')}}">
                            <div class="form-group">
                                <div class="input-group col-md-5">
                                    <input type="text" class="form-control col-md-5" name="pesquisa" value="{{old('pesquisa','')}}" id="pesquisa" placeholder="Pesquisa" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>

                                </div>
                            </div>    
                          </form>
                            @if(empty($cursos) )
                                    <div class="alert alert-danger btn-lg col-md-10 danger">
                                        Nenhum resultado foi encontrado para a pesquisa {{old('pesquisa')}}
                                    </div>
                            @else        

                                <table class="table table-striped">
                                    <thead>
                                        <div class="col col-xs-12 text-right">
                                            <a href="{{route('curso.create')}}" >
                                                <button type="button" class="btn btn-sm btn-success btn-create">
                                                    <span class="glyphicon glyphicon-plus"></span> Cursos
                                                </button>
                                            </a>
                                        </div>
                                        <div class=" col-md-2">
                                            <div class="form-group"></div>
                                        </div>
                                        
                                        
                                        <tr>
                                            <th class="text-center"> ID</th>
                                            <th class="text-center"> Nome</th>
                                            <th class="text-center"> Carga Horária</th>
                                            <th class="text-center"> Vagas</th>
                                            
                                            <th class="text-center">Ação</th>
                                        </tr>
                                    </thead>
                                        @foreach($cursos as $curso)
                                            <tr>
                                                <th class="text-center">{{$curso->id}}</th>
                                                <td class="text-center">{{$curso->nome}}</td>
                                                <td class="text-center">{{$curso->ch}}</td>
                                                <td class="text-center">{{$curso->vagas}}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm" href="{{route('curso.edit',$curso->id)}}" class="btn btn-info btn-lg">
                                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                                    </a>

                                                    <a class="btn btn-primary btn-sm" href="{{route('curso.pessoas',$curso->id)}}" class="btn btn-info btn-lg">
                                                        <span class="glyphicon glyphicon-search"></span> Visualizar
                                                    </a>
                                                    
                                                    <a onclick="return confirm('Deseja excluir esse registro?')" href="{{route('curso.delete',$curso->id)}}" class="btn btn-danger btn-sm">
                                                        <span class="glyphicon glyphicon-remove" ></span> 
                                                        Excluir
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection