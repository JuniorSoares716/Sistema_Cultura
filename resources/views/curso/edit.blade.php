@extends('layouts.app')

@section('content')
		
		
		<div class="col-md-2"></div>
			<div class="col-md-12"></div>
			<div class="col-md-2"></div>
			<form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{route('curso.update',$curso->id)}}">
				{{ csrf_field() }}
				<fieldset class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Editar Curso</div>
						<div class="panel-body">
							<div class="form-group col-md-8 {{ $errors->has('nome') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="nome">Curso:</label>
								<div class="col-md-10">
									<input id="nome" name="nome" value="{{ $curso->nome }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('nome'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-4 {{ $errors->has('ch') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="ch">CH:</label>
								<div class="col-md-8">
									<input id="ch" name="ch" value="{{ $curso->ch }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('ch'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('ch') }}</strong>
                                    </span>
                            	@endif
							</div>
							
							<div class="form-group col-md-8 {{ $errors->has('endereco') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="endereco">Endereço:</label>
								<div class="col-md-10">
									<input id="endereco" name="endereco" value="{{ $curso->endereco }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('endereco'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                            	@endif
							</div>
							<div class="form-group col-md-4 {{ $errors->has('numero') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="numero">N°:</label>
								<div class="col-md-8">
									<input id="numero" maxlength="6" name="numero" value="{{ $curso->numero }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('numero'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-4 {{ $errors->has('bairro') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="bairro">Bairro:</label>
								<div class="col-md-8">
									<input id="bairro" name="bairro" value="{{ $curso->bairro }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('bairro'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('bairro') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-5 {{ $errors->has('complemento') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="complemento">Complemento:</label>
								<div class="col-md-7">
									<input id="complemento" name="complemento" value="{{ $curso->complemento }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('complemento'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('complemento') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-3 {{ $errors->has('vagas') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="vagas">Vagas:</label>
								<div class="col-md-7">
									<input id="vagas" name="vagas" value="{{ $curso->vagas }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('vagas'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('vagas') }}</strong>
                                    </span>
                            	@endif
							</div>


                            <div class="form-group col-md-12 {{ $errors->has('dias') ? ' has-error' : '' }}">
                            	<label class="col-md-2 control-label">Dias do Curso: </label>
                            	@php $dia = explode("-", $curso->dias) @endphp
	                                <label class="checkbox-inline"><input type="checkbox" id="opt1" name="dias[]" value="SEGUNDA" @if(is_array(old('dias')) && in_array("SEGUNDA", old('dias'))) checked @elseif (is_array($dia) && in_array("SEGUNDA", $dia)) checked @endif>Segunda</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt2" name="dias[]" value="TERÇA" @if(is_array(old('dias')) && in_array("TERÇA", old('dias'))) checked @elseif (is_array($dia) && in_array("TERÇA", $dia)) checked @endif>Terça</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt3" name="dias[]" value="QUARTA" @if(is_array(old('dias')) && in_array("QUARTA", old('dias'))) checked @elseif (is_array($dia) && in_array("QUARTA", $dia)) checked @endif>Quarta</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt4" name="dias[]" value="QUINTA" @if(is_array(old('dias')) && in_array("QUINTA", old('dias'))) checked @elseif (is_array($dia) && in_array("QUINTA", $dia)) checked @endif>Quinta</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt5" name="dias[]" value="SEXTA" @if(is_array(old('dias')) && in_array("SEXTA", old('dias'))) checked @elseif (is_array($dia) && in_array("SEXTA", $dia)) checked @endif>Sexta</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt6" name="dias[]" value="SÁBADO" @if(is_array(old('dias')) && in_array("SÁBADO", old('dias'))) checked @elseif (is_array($dia) && in_array("SÁBADO", $dia)) checked @endif>Sábado</label>
	                                <label class="checkbox-inline"><input type="checkbox" id="opt7" name="dias[]" value="DOMINGO" @if(is_array(old('dias')) && in_array("DOMINGO", old('dias'))) checked @elseif (is_array($dia) && in_array("DOMINGO", $dia)) checked @endif>Domingo</label>
                                @if ($errors->has('dias'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dias') }}</strong>
                                    </span>
                                @endif
                            </div>


							<div class="form-group col-md-6 {{ $errors->has('horario') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="horario">Horário:</label>
								<div class="col-md-8">
									<input id="horario" name="horario" value="{{ $curso->horario }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('horario'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('horario') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-6 {{ $errors->has('turno') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="turno">Turno:</label>
								<div class="col-md-8">
									<select class="form-control" name="turno">
										@if($qtd>=2)
											@if($curso->turno == "M")
												<option value="{{$curso->turno}}" selected> Manhã </option>
											@else
												<option value="{{$curso->turno}}" selected> Tarde </option>	
											@endif
										@else
											@if($curso->turno == "M")
												<option value="{{$curso->turno}}" selected> Manhã </option>
												<option value="{{$curso->turno}}"> Tarde </option>	
											@else
												<option value="{{$curso->turno}}"> Manhã </option>
												<option value="{{$curso->turno}}" selected> Tarde </option>	
											@endif
										@endif
									</select>
								</div>

								@if ($errors->has('turno'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('turno') }}</strong>
                                    </span>
                            	@endif
							</div>

                            <div class="form-group col-md-12 {{ $errors->has('documento') ? ' has-error' : '' }}">
                            	<label class="col-md-2 control-label">Documentos Necessários: </label>
								@php $documento = explode("-", $curso->documento) @endphp

                                <label class="checkbox-inline"><input type="checkbox" id="chk1" name="documento[]" value="RG" @if(is_array(old('documento')) && in_array("RG", old('documento'))) checked @elseif(is_array($documento) && in_array("RG", $documento)) checked @endif>RG</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk2" name="documento[]" value="CPF" @if(is_array(old('documento')) && in_array("CPF", old('documento'))) checked @elseif(is_array($documento) && in_array("CPF", $documento)) checked @endif>CPF</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk3" name="documento[]" value="COMPROVANTE DE RESIDÊNCIA" @if(is_array(old('documento')) && in_array("COMPROVANTE DE RESIDÊNCIA", old('documento'))) checked @elseif(is_array($documento) && in_array("COMPROVANTE DE RESIDÊNCIA", $documento)) checked @endif>Comprov. Residência</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk4" name="documento[]" value="CARTEIRA DE TRABALHO" @if(is_array(old('documento')) && in_array("CARTEIRA DE TRABALHO", old('documento'))) checked @elseif(is_array($documento) && in_array("CARTEIRA DE TRABALHO", $documento)) checked @endif>Carteira de Trabalho</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk5" name="documento[]" value="HABILITAÇÃO A" @if(is_array(old('documento')) && in_array("HABILITAÇÃO A", old('documento'))) checked @elseif (is_array($documento) && in_array("HABILITAÇÃO A", $documento)) checked @endif>Habilitação A</label>

                                @if ($errors->has('documento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('documento') }}</strong>
                                    </span>
                                @endif
                            </div>
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<div class="form-group">
										<button type="submit" class="btn btn-success">Alterar</button>
										<button type="reset" class="btn btn-danger">Cancelar</button>
								</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		
@endsection