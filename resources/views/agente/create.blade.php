@extends('layouts.app')

@section('content')


<div class="container">
	
	<form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{route('agente.store')}}">

		{{ csrf_field() }}
		<div class="container">
			
			<div class="col-md-3"></div>
			<ul class="nav nav-pills controla">
				<li class="active"><a href="#DadosPessoais" data-toggle="tab">Dados Pessoais</a></li>
				<li><a href="#DadosCulturais" data-toggle="tab">Dados Culturais</a></li>
				<li><a href="#DadosEscolares" data-toggle="tab">Dados Escolares</a></li>
				<li><a href="#EndereçoContato" data-toggle="tab">Endereço/Contato</a></li>
			</ul>
		</div>
		<p></p>
	
		<div class="tab-content" id='content'>
			   	<div id="DadosPessoais" class="tab-pane active">
		      		<div class="col-md-2"> 	</div>
			        <fieldset class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">Dados Pessoais</div>
							<div class="panel-body">
									<!-- Text input-->
								<div class="form-group col-md-10 {{ $errors->has('nome') ? ' has-error' : '' }}">
									<label class="col-md-2 control-label" for="nome">Nome*:</label>
									<div class="col-md-8">
										<input id="nome" name="nome" value="{{ old('nome'), '' }}" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('nome'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('nome') }}</strong>
	                                    </span>
                                	@endif
								</div>
										<!-- Text input-->
								<div class="form-group col-md-6 {{ $errors->has('cpf') ? ' has-error' : '' }}">
									<label class="col-md-2 control-label" for="cpf">CPF*:</label>
									<div class="col-md-8">
										<input id="cpf" name="cpf" placeholder="000.000.000-00" class="form-control input-md" value="{{ old('cpf'), '' }}" type="text" maxlength="14" >
									</div>

									@if ($errors->has('cpf'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('cpf') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-6 {{ $errors->has('rg') ? ' has-error' : '' }}">
									<label class="col-md-2 control-label" for="rg">RG*:</label>
									<div class="col-md-8">
										<input id="rg" name="rg" placeholder="0000000000-0" class="form-control input-md"  type="text" maxlength="12" value="{{ old('rg'), '' }}">
									</div>

									@if ($errors->has('rg'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('rg') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-6 {{ $errors->has('nascimento') ? ' has-error' : '' }}">
									<label class="col-md-2 control-label nascimento" for="nascimento">Nasc*:</label>
									<div class="col-md-8">
										<input id="nascimento" name="nascimento" class="form-control input-md" value="{{ old('nascimento'), '' }}" type="date" maxlength="11">
									</div>


									@if ($errors->has('nascimento'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('nascimento') }}</strong>
	                                    </span>
                                	@endif
                                </div>
								

								<div class="form-group col-md-6 {{ $errors->has('sexo') ? ' has-error' : '' }}">
									<label class="col-md-2 control-label" for="sexo">Sexo:</label>
									<div class="col-md-8">
										<select class="form-control " name="sexo" id="sexo">
											@if(old('sexo')=="M")
												<option value="{{old('sexo')}}"> Masculino </option>
											@elseif(old('sexo')=="F")
												<option value="{{old('sexo')}}"> Feminino </option>
											@elseif(old('sexo')=="O")
												<option value="{{old('sexo')}}"> Outros </option>
											@else
												<option value="" > Selecione Uma Opção </option>
											@endif
											<option value="M" >Masculino</option>
											<option value="F" > Feminino</option>
											<option value="O" > Outros</option>
										</select>
									</div>

									@if ($errors->has('sexo'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('sexo') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="col-md-5"></div>
								<div class="col-md-1">
									<div class="button text-center">
										<button id="submit" type="submit" class="next btn btn-default" >Proximo</button>
									</div>
								</div>
									
								<div class="col-md-12 text-center"">
									<label class="text-danger">[*]Campo Obrigatorio</label>
								</div>
							</div>
						</div>
					</fieldset>
		      	</div>
			  
		    	<div id="DadosCulturais" class="tab-pane">
		      		<div class="col-md-2"> 	</div>
					<fieldset class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">Dados Culturais</div>
							<div class="panel-body">
								<!-- Text input-->
								<div class="form-group {{ $errors->has('cat') ? ' has-error' : '' }}">
									<label for="cat" class="col-md-4 control-label">Categoria:</label>
									<div class="col-md-3">
										<select class="form-control" data-live-search="true" id="cat" name="cat">
											<option data-tokens="ketchup mustard" value="-1" selected >Selecione...</option>
											@foreach($categorias as $cat)
												@if(old('cat') == $cat->id)
													<option data-tokens="ketchup mustard" value="{{$cat->id}}" selected >{{$cat->nome}}" </option>
												@endif
												<option data-tokens="ketchup mustard" value="{{$cat->id}}">{{$cat->nome}}</option>
											@endforeach
										</select>

										@if ($errors->has('cat'))
		                                    <span class="help-block">
		                                         <strong>{{ $errors->first('cat') }}</strong>
		                                    </span>
	                                	@endif
									</div>
								</div>
								<!-- Text input-->
								<div class="form-group {{ $errors->has('miv') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="miv">Movimento/Instituição Cultural:</label>
									<div class="col-md-6">
										<input id="miv" name="miv" class="form-control input-md" value="{{ old('miv'), '' }}" type="text">
									</div>

									@if ($errors->has('miv'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('miv') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<!-- Text input-->
								<div class="form-group {{ $errors->has('atividade') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="atividade">Atividade produzida:</label>
									<div class="col-md-6">
										<input id="atividade" name="atividade" class="form-control input-md"  value ="{{ old('atividade'), '' }}" type="text">
									</div>

									@if ($errors->has('atividade'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('atividade') }}</strong>
	                                    </span>
                                	@endif

								</div>
								<div class="form-group {{ $errors->has('tempo') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="tempo">Tempo de trabalho:</label>
									<div class="col-md-3">
										<input id="tempo" name="tempo" value ="{{ old('tempo'), '' }}" placeholder="00" maxlength="2" class="form-control input-md" type="text">
									</div>
								</div>
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="form-group ">
										<div class="button text-center">
											<button type="reset" class=" prev btn btn-default">Anterior</button>
											<button type="submit" class="next btn btn-default">Proximo</button>
										</div>
									</div>
								</div>

								<div class="col-md-12 text-center"">
									<label class="text-danger">[*]Campo Obrigatorio</label>
								</div>
							</div>
						</div>
					</fieldset>
			    </div>
			   
		      	<div id="DadosEscolares" class="tab-pane">
			      	<div class="col-md-2"> 	</div>
					<fieldset class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">Dados Escolares</div>
							<div class="panel-body">
								<!-- Text input-->
							
								<!-- Text input-->
								<div class="form-group {{ $errors->has('instituicao') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="instituicao">Instituição de Ensino:</label>
									<div class="col-md-8">
										<input id="instituicao" name="instituicao" value ="{{ old('instituicao'), '' }}" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('instituicao'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('instituicao') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-6 {{ $errors->has('serie') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="serie">Série:</label>
									<div class="col-md-8">
										<input id="serie" name="serie" value ="{{ old('serie'), '' }}" placeholder="1" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('serie'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('serie') }}</strong>
	                                    </span>
                                	@endif
                            	</div>
								

								<div class="form-group col-md-6 {{ $errors->has('turno') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="turno">Turno:</label>
									<div class="col-md-8">
										<select class="form-control" name="turno">
											@if(old('turno')=="M")
											<option value="{{old('turno')}}"> Manhã </option>
											@elseif(old('turno')=="T")
												<option value="{{old('turno')}}"> Tarde </option>
											@elseif(old('turno')=="N")
												<option value="{{old('turno')}}"> Noite </option>
											@else
												<option value=""> Selecione Uma Opção </option>
											@endif
											<option value="M" >Manhã</option>
											<option value="T" >Tarde</option>
											<option value="N" >Noite</option>
										</select>
									</div>

									@if ($errors->has('turno'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('turno') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="col-md-4"></div>
								<div class="col-md-4 text-center">
									<div class="form-group">
										<button type="reset" class="prev btn btn-default">Anterior</button>
										<button type="submit" class="next btn btn-default">Proximo</button>
									</div>
								</div>
								<div class="col-md-12 text-center"">
									<label class="text-danger">[*]Campo Obrigatorio</label>
								</div>
							</div>
						</div>
					</fieldset>
			    </div>

			  	<div id="EndereçoContato" class="tab-pane fade">
			  		<div class="col-md-2"> 	</div>
					<fieldset class="col-md-8">
						<div class="panel panel-primary">
							<div class="panel-heading">Endereço/Contato</div>
							<div class="panel-body">
								<!-- Text input-->
								<div class="form-group col-md-6 {{ $errors->has('logradouro') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="logradouro">Logradouro:</label>
									<div class="col-md-8">
										<input id="logradouro" value ="{{ old('logradouro'), '' }}" name="logradouro" placeholder="" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('logradouro'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('logradouro') }}</strong>
	                                    </span>
                                	@endif
                                </div>

                               	<div class="form-group col-md-3 {{ $errors->has('numero') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="numero">N°:</label>
									<div class="col-md-9">
										<input id="numero" name="numero" value ="{{ old('numero'), '' }}" placeholder="1234" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('numero'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('numero') }}</strong>
	                                    </span>
                                	@endif
                            	</div>

                            	<div class="form-group col-md-3 {{ $errors->has('bairro') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="bairro">Bairro:</label>
									<div class="col-md-8">
										<input id="bairro" name="bairro" value ="{{ old('bairro'), '' }}" class="form-control input-md" type="text">
									</div>


									@if ($errors->has('bairro'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('bairro') }}</strong>
	                                    </span>
                                	@endif
								</div>
								<!-- Text input-->
								<div class="form-group col-md-4 {{ $errors->has('cidade') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="cidade">Cidade:</label>
									<div class="col-md-8">
										<input id="cidade" name="cidade" value ="{{ old('cidade'), '' }}" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('bairro'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('cidade') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-4 {{ $errors->has('cep') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="cep">CEP:</label>
									<div class="col-md-8">
										<input id="cep" name="cep" placeholder="63400-000" value ="{{ old('cep'), '' }}" maxlength="9" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('cep'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('cep') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="email">Email:</label>
									<div class="col-md-8">
										<input id="email" name="email" placeholder="cedro@xxxx.com" class="form-control input-md" value ="{{ old('email'), '' }}" type="email">
									</div>

									@if ($errors->has('email'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-6 {{ $errors->has('celular') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="celular">Celular:</label>
									<div class="col-md-9">
										<input id="celular" name="celular" value ="{{ old('celular'), '' }}" placeholder="(00) 9 0000-0000" maxlength="16" class="form-control input-md" type="text">
									</div>
									@if ($errors->has('celular'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('celular') }}</strong>
	                                    </span>
                                	@endif
                            	</div>

                            	<div class="form-group col-md-6 {{ $errors->has('telefone') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="telefone">Telefone:</label>
									<div class="col-md-9">
										<input id="telefone" name="telefone" placeholder="(00) 0000-0000" class="form-control input-md" value ="{{ old('telefone'), '' }}" type="text" maxlength="14">
									</div>

									@if ($errors->has('telefone'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('telefone') }}</strong>
	                                    </span>
                                	@endif
								</div>
								<div class="col-md-3"></div>
								<div class="col-md-6">
									<div class="form-group text-center">
											<button type="reset" class="prev btn btn-default">Anterior</button>
											<button type="submit" class="btn btn-success">Cadastrar</button>
											<button type="reset" class="btn btn-danger">Cancelar</button>
									</div>
								</div>	
								<div class="col-md-12 text-center"">
									<label class="text-danger">[*]Campo Obrigatorio</label>
								</div>
							</div>
						</div>
					</fieldset>
		      	</div>
		</div>
	</form>
</div>



@endsection
