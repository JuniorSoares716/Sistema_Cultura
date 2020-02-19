@extends('site.header')
@extends('site.menu')
@extends('site.rodape')
@extends('site.introducao')
	@section('conteudo')
		<!-- Formulários-->
		<div class="col-md-3"></div>
		<div class="container-fluid">
			<form class="form-horizontal" action="{{route('pessoa.store')}}" method="POST">
				{{ csrf_field() }}
				<fieldset class="col-md-6">
					<div class="panel panel-primary">
						<div class="panel-heading">INFORMAÇÕES DE MATRÍCULA</div>
						<div class="panel-body">

							<!-- Text input-->
							<div class="form-group col-md-4">
								<label class="control-label">DADOS PESSOAIS</label><br>
							</div>
							
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>
							<div class="form-group col-md-8 {{ $errors->has('nome') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="nome">Nome:</label>
								<div class="col-md-10">
									<input id="nome" name="nome" value="{{ old('nome'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('nome'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-4 {{ $errors->has('idade') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="idade">Idade:</label>
								<div class="col-md-8">
									<input id="idade" name="idade" maxlength="3" value="{{ old('idade'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('idade'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('idade') }}</strong>
                                    </span>
                            	@endif
							</div>
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>
							<hr>
							
							<div class="form-group col-md-4">
								<label class="control-label">ENDEREÇO</label><br>
							</div>
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>

							<div class="form-group col-md-8 {{ $errors->has('rua') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="rua">Rua:</label>
								<div class="col-md-10">
									<input id="rua" name="rua" value="{{ old('rua'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('rua'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('rua') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-4 {{ $errors->has('numero') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="numero">N°:</label>
								<div class="col-md-8">
									<input id="numero" maxlength="6" name="numero" value="{{ old('numero'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('numero'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-6 {{ $errors->has('complemento') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="complemento">Comple:</label>
								<div class="col-md-8">
									<input id="complemento" name="complemento" value="{{ old('complemento'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('complemento'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('complemento') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-6 {{ $errors->has('bairro') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="bairro">Bairro:</label>
								<div class="col-md-8">
									<input id="bairro" name="bairro" value="{{ old('bairro'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('bairro'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group">
								<label class="control-label"></label><br>
							</div>
							<hr>

							<div class="form-group col-md-4">
								<label class="control-label">CONTATO</label><br>
							</div>
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>
							
							<div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
								<label class="col-md-3 control-label" for="email">Email:</label>
								<div class="col-md-9">
									<input id="email" name="email" placeholder="cedro@secretaria.com" class="form-control input-md" value ="{{ old('email'), '' }}" type="email">
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
								<label class="col-md-3 control-label" for="telefone">Tel:</label>
								<div class="col-md-9">
									<input id="telefone" name="telefone" placeholder="(00) 0000-0000" class="form-control input-md" value ="{{ old('telefone'), '' }}" type="text" maxlength="14">
								</div>

								@if ($errors->has('telefone'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('telefone') }}</strong>
                                    </span>
                            	@endif
							</div>

                        	<div class="form-group col-md-6 {{ $errors->has('outro') ? ' has-error' : '' }}">
								<label class="col-md-3 control-label" for="outro">Outro:</label>
								<div class="col-md-9">
									<input id="outro" name="outro" placeholder="(00) 0000-0000" class="form-control input-md" value ="{{ old('outro'), '' }}" type="text" maxlength="14">
								</div>

								@if ($errors->has('outro'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('outro') }}</strong>
                                    </span>
                            	@endif
							</div>
							
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>
							<hr>
							<div class="form-group col-md-4">
								<label class="control-label">ESCOLARIDADE</label><br>
							</div>
							
							<div class="form-group">
								<label class="control-label"></label><br>
							</div>

								<div class="form-group col-md-8 {{ $errors->has('instituicao') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="instituicao">Instituição:</label>
									<div class="col-md-8">
										<input id="instituicao" name="instituicao" value ="{{ old('instituicao'), '' }}" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('instituicao'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('instituicao') }}</strong>
	                                    </span>
                                	@endif
								</div>

								<div class="form-group col-md-4 {{ $errors->has('ano') ? ' has-error' : '' }}">
									<label class="col-md-4 control-label" for="ano">Série:</label>
									<div class="col-md-8">
										<input id="ano" name="ano" value ="{{ old('ano'), '' }}" placeholder="1" class="form-control input-md" type="text">
									</div>

									@if ($errors->has('ano'))
	                                    <span class="help-block">
	                                         <strong>{{ $errors->first('ano') }}</strong>
	                                    </span>
                                	@endif
                            	</div>
								

								<div class="form-group col-md-8 {{ $errors->has('turno') ? ' has-error' : '' }}">
									<label class="col-md-3 control-label" for="turno">Turno:</label>
									<div class="col-md-8">
										<select class="form-control" name="turno">
											@if(old('turno')=="M")
											<option value="{{old('turno')}}"> Manhã </option>
											@elseif(old('turno')=="T")
												<option value="{{old('turno')}}"> Tarde </option>
											@elseif(old('turno')=="N")
												<option value="{{old('turno')}}"> Noite </option>
											@else
												<option value=""> Selecione..</option>
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
							<div class="col-md-12">
								<div class="form-group text-center">
									<div>
										<button type="submit" class="col-md-5 btn btn-success pull-left">Cadastrar</button>
										<button type="reset" class="col-md-5 btn btn-danger pull-right">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	@endsection
