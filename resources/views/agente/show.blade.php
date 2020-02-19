@extends('layouts.app')

@section('content')
    <div class="col-md-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">Agentes</div>
                    <div class="panel-body">
                        <div class="row col-md-12">

                            @if(session('delete') == true)
                                <div class="col-md-2"></div>
                                <div class="alert alert-success col-md-8 text-center">
                                    <strong>Sucesso!</strong>
                                    O Agente {{ session('nome') }} foi removido.
                                </div>
                            @elseif(session('insert') == true)
                                <div class="col-md-3"></div>
                                <div class="alert alert-success col-md-6 text-center">
                                    <strong>Sucesso!</strong>
                                    O Agente {{ old("nome") }} foi adicionado.
                                </div>
                            @elseif(session('update') == true)
                                <div class="col-md-2"></div>
                                <div class="alert alert-success col-md-8 text-center">
                                    <strong>Sucesso!</strong>
                                    O Agente {{ old('nome') }} foi atualizado.
                                </div>
                            @endif
                          <form method="GET" action="{{route('agente.show')}}">
                            <div class="form-group">
                                <div class="input-group col-md-5">
                                    <input type="text" class="form-control col-md-5" name="pesquisa" value="{{old('pesquisa','')}}" id="pesquisa" placeholder="Pesquisa" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                                    </div>

                                </div>
                                <div class="form-group {{ $errors->has('opt') ? ' has-error' : '' }} radio">

                                    <label class="radio-inline"><input type="radio" id="opt1" name="opt" value="nome">Nome</label>
                                    <label class="radio-inline"><input type="radio" id="opt2" name="opt" value="cpf">CPF</label>
                                    <label class="radio-inline"><input type="radio" id="opt3" name="opt" value="categoria">Categoria</label>

                                    @if ($errors->has('opt'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('opt') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>    
                          </form>
                            @if(empty($categorias) && empty($agentes) )
                                    <div class="alert alert-danger btn-lg col-md-10 danger">
                                        Nenhum resultado foi encontrado para a pesquisa {{old('pesquisa')}}
                                    </div>
                            @else        

                                <table class="table table-striped">
                                    <thead>
                                        <div class="col col-xs-12 text-right">
                                            <a href="{{route('agente.create')}}" >
                                                <button type="button" class="btn btn-sm btn-success btn-create">
                                                    <span class="glyphicon glyphicon-plus"></span> Agentes
                                                </button>
                                            </a>
                                        </div>
                                        <div class=" col-md-2">
                                            <div class="form-group"></div>
                                        </div>
                                        
                                        
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Categoria</th>
                                            <th>Celular</th>
                                            
                                            <th class="text-center">Ação</th>
                                        </tr>
                                    </thead>
                                    @if(!empty($categorias))
                                        @foreach($categorias as $cat)

                                            @foreach($cat->agentes as $agt)
                                                <tr>
                                                    <th>{{$agt->id}}</th>
                                                    <td>{{$agt->nome}}</td>
                                                    <td>{{$agt->categoria->nome}}</td>
                                                    <td>{{$agt->celular}}</td>
                                                    
                                                    <td class="text-center">

                                                        <a class="btn btn-primary btn-sm" href="{{route('agente.edit', $agt->id) }}" class="btn btn-info btn-lg">
                                                            <span class="glyphicon glyphicon-pencil"></span> Editar
                                                        </a>
                                                
                                                        <a onclick="return confirm('Deseja excluir esse registro?')" href="{{route('agente.delete', $agt->id) }}" class="btn btn-danger btn-sm">
                                                            <span class="glyphicon glyphicon-remove" ></span> 
                                                            Excluir
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @elseif(!empty($agentes))
                                        @foreach($agentes as $agt)
                                            <tr>
                                                <th>{{$agt->id}}</th>
                                                <td>{{$agt->nome}}</td>
                                                <td>{{$agt->categoria->nome}}</td>
                                                <td>{{$agt->celular}}</td>
                                                <td class="text-center">
                                                    <a class="btn btn-primary btn-sm" href="{{route('agente.edit', $agt->id) }}" class="btn btn-info btn-lg">
                                                        <span class="glyphicon glyphicon-pencil"></span> Editar
                                                    </a>
                                                    
                                                    <a onclick="return confirm('Deseja excluir esse registro?')" href="{{route('agente.delete', $agt->id) }}" class="btn btn-danger btn-sm">
                                                        <span class="glyphicon glyphicon-remove" ></span> 
                                                        Excluir
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
