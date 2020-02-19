@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Pessoas</div>
                    <div class="panel-body">
                        <div class="row col-md-12">

                            @include('site.flash')    

                            <table class="table table-striped">
                                <thead>
                                    <div class=" col-md-2">
                                        <div class="form-group"></div>
                                    </div>
                                    
                                    
                                    <tr>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>Celular</th>
                                        <th>Rua</th>
                                        
                                        <th class="text-center">Ação</th>
                                    </tr>
                                </thead>
                                    @php $curso_id = $curso->id @endphp
                                    @foreach($curso->pessoas as $pessoa)
                                        <tr>
                                            <th>{{$pessoa->id}}</th>
                                            <td>{{$pessoa->nome}}</td>
                                            <td>{{$pessoa->celular}}</td>
                                            <td>{{$pessoa->rua}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary btn-sm" href="{{route('pessoa.edit',['pessoa' => $pessoa->id, 'curso' => $curso_id])}}" class="btn btn-info btn-lg">
                                                    <span class="glyphicon glyphicon-pencil"></span> Editar
                                                </a>

                                                <a onclick="return confirm('Deseja excluir essa pessoa desse curso?')" href="{{route('curso.desmatricular',['curso' => $curso_id, 'pessoa' => $pessoa->id])}}" class="btn btn-danger btn-sm">
                                                    <span class="glyphicon glyphicon-remove" ></span> 
                                                    Desmatricular
                                                </a>

                                                <a onclick="return confirm('Deseja excluir essa pessoa do sistema?')" href="{{route('pessoa.delete',['pessoa' => $pessoa->id, 'curso' => $curso_id])}}" class="btn btn-danger btn-sm">
                                                    <span class="glyphicon glyphicon-remove" ></span> 
                                                    Remover
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
