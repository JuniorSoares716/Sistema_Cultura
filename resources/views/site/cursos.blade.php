@extends('site.header')
@extends('site.menu')
@extends('site.rodape')
@extends('site.introducao')
	@section('conteudo')
	    <div class="col-md-11">
	        <div class="panel panel-primary">
	            <div class="panel-heading">Cursos</div>
	            <div class="panel-body">
	                <div class="row col-md-12">

	                		@include('site.flash')

	                        <table class="table table-striped">
	                          <form method="GET" action="{{route('site.cursos')}}">
	                            <div class="form-group col-md-10 {{ $errors->has('consulta') ? ' has-error' : '' }}">
	                                <div name="buscar" class="input-group col-md-7">
	                                    <input type="text" class="form-control col-md-5" name="consulta" id="consulta" placeholder="Procure seu e-mail.." type="text"">
	                                    <div class="input-group-btn">
	                                        <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	                                    </div>
	                                </div>
                                    @if ($errors->has('consulta'))
                                        <span class="col-md-5 help-block">
                                            <strong>{{ $errors->first('consulta') }}</strong>
                                        </span>
                                    @endif
	                            </div>    
	                          </form>
	                            <thead>
	                            	@if($logado == 0)
			                            <div class="col col-xs-12 text-right">
			                                <a href="{{route('pessoa.create')}}" >
			                                    <button type="button" class="btn btn-sm btn-success btn-create">
			                                        <span class="glyphicon glyphicon-plus"></span> Cadastrar-se
			                                    </button>
			                                </a>
			                            </div>
			                        @endif
	                            <div class=" col-md-2">
	                                <div class="form-group"></div>
	                            </div>
	                            
	                            
	                            <tr>
	                                <th>ID</th>
	                                <th>Nome Curso</th>
	                                <th>Carga Horaria</th>
	                                <th>Dias do Curso</th>
	                                
	                                <th class="text-center">Ação</th>
	                            </tr>
	                            </thead>
	                            @foreach($cursos as $curso)
	                                <tr>

	                                    <th>{{$curso->id}}</th>
	                                    <td>{{$curso->nome}}</td>
	                                    <td>{{$curso->ch}}</td>
	                                    <td>{{$curso->dias}}</td>

		                            	@if($logado == 1)
		                            		@php $matriculado = 0; @endphp

		                            		@foreach($pessoas->cursos as $c)

		                            			@if($curso->id == $c->id)
		                            				@php $matriculado = 1; @endphp
			                                    @endif
	                                    	@endforeach

	                                    	@if($matriculado == 1)
                                    			<td class="text-center">
                                                <a onclick="return confirm('Deseja excluir essa pessoa desse curso?')" href="{{route('pessoa.desmatricular',['pessoa' => $pessoas->id, 'curso' => $curso->id])}}" class="btn btn-danger btn-sm">
                                                    <span class="glyphicon glyphicon-remove" ></span> 
                                                    Desmatricular-se
                                                </a>
		                                    	</td>
		                                    @else
                                    			<td class="text-center">
		 	                                        <a class="btn btn-primary btn-sm" href="{{route('pessoa.matricular',['pessoa' => $pessoas->id, 'curso' => $curso->id])}}" class="btn btn-info btn-lg">
			                                            <span class="glyphicon glyphicon-pencil"></span> Matricular-se
			                                        </a>
		                                    	</td>
		                                    @endif
	                                    @else
	                                    	<td class="text-center" >
	 	                                        <a class="btn btn-primary btn-sm buscar" href="#"  class="btn btn-info btn-lg">
		                                            <span class="glyphicon glyphicon-search"></span> Busque seu e-mail
		                                        </a>
	                                    	</td>
				                        @endif
	                                </tr>
	                            @endforeach
	                            <form>
                               		<input type="hidden" name="email" id="email" value="{{ $logado }}">
	                            </form>
	                        </table>
	                </div>
	            </div>
	        </div>
	@endsection
