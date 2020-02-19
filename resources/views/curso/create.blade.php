@extends('layouts.app')

@section('content')
		
		
		<div class="col-md-2"></div>
			<div class="col-md-12"></div>
			<div class="col-md-2"></div>
			<form class="form-horizontal" data-toggle="validator" role="form" method="POST" action="{{route('curso.store')}}">
				{{ csrf_field() }}
				<fieldset class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Dados do Curso</div>
						<div class="panel-body">
							<div class="form-group col-md-8 {{ $errors->has('nome') ? ' has-error' : '' }}">
								<label class="col-md-2 control-label" for="nome">Curso:</label>
								<div class="col-md-10">
									<input id="nome" name="nome" value="{{ old('nome'), '' }}" class="form-control input-md" type="text">
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
									<input id="ch" name="ch" value="{{ old('ch'), '' }}" class="form-control input-md" type="text">
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
									<input id="endereco" name="endereco" value="{{ old('endereco'), '' }}" class="form-control input-md" type="text">
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
									<input id="numero" maxlength="6" OnKeyPress="formatar('######', this)" name="numero" value="{{ old('numero'), '' }}" class="form-control input-md" type="text">
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
									<input id="bairro" name="bairro" value="{{ old('bairro'), '' }}" class="form-control input-md" type="text">
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
									<input id="complemento" name="complemento" value="{{ old('complemento'), '' }}" class="form-control input-md" type="text">
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
									<input id="vagas" OnKeyPress="formatar('###', this)" maxlenght="3" name="vagas" value="{{ old('vagas'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('vagas'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('vagas') }}</strong>
                                    </span>
                            	@endif
							</div>


                            <div class="form-group col-md-12 {{ $errors->has('dias') ? ' has-error' : '' }}">
                            	<label class="col-md-2 control-label">Dias do Curso: </label>

                                <label class="checkbox-inline"><input type="checkbox" id="opt1" name="dias[]" value="SEGUNDA" @if(is_array(old('dias')) && in_array("SEGUNDA", old('dias'))) checked @endif>Segunda</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt2" name="dias[]" value="TERÇA" @if(is_array(old('dias')) && in_array("TERÇA", old('dias'))) checked @endif>Terça</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt3" name="dias[]" value="QUARTA" @if(is_array(old('dias')) && in_array("QUARTA", old('dias'))) checked @endif>Quarta</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt4" name="dias[]" value="QUINTA" @if(is_array(old('dias')) && in_array("QUINTA", old('dias'))) checked @endif>Quinta</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt5" name="dias[]" value="SEXTA" @if(is_array(old('dias')) && in_array("SEXTA", old('dias'))) checked @endif>Sexta</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt6" name="dias[]" value="SÁBADO" @if(is_array(old('dias')) && in_array("SÁBADO", old('dias'))) checked @endif>Sábado</label>
                                <label class="checkbox-inline"><input type="checkbox" id="opt7" name="dias[]" value="DOMINGO" @if(is_array(old('dias')) && in_array("DOMINGO", old('dias'))) checked @endif>Domingo</label>

                                @if ($errors->has('dias'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dias') }}</strong>
                                    </span>
                                @endif
                            </div>


							<div class="form-group col-md-4 {{ $errors->has('turno') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="turno">Turno:</label>
								<div class="col-md-8">
									<select class="form-control" name="turno" id="turno">
										@if(old('turno')=="M")
										<option value="{{old('turno')}}" selected> Manhã </option>
										@elseif(old('turno')=="T")
											<option value="{{old('turno')}}" selected> Tarde </option>
										@elseif(old('turno')=="A")
											<option value="{{old('turno')}}" selected> Ambos </option>
										@else
											<option value="" selected> Selecione..</option>
										@endif
										<option value="M" >Manhã</option>
										<option value="T" >Tarde</option>
										<option value="A" >Ambos</option>
									</select>
								</div>

								@if ($errors->has('turno'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('turno') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div class="form-group col-md-4 {{ $errors->has('horario') ? ' has-error' : '' }}">
								<label class="col-md-4 control-label" for="horario">Horário:</label>
								<div class="col-md-8">
									<input id="horario" name="horario" OnKeyPress="formatar('##:##-##:##', this)" value="{{ old('horario'), '' }}" maxlength="11" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('horario'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('horario') }}</strong>
                                    </span>
                            	@endif
							</div>

							<div id="esconder" class="form-group col-md-4 {{ $errors->has('horat') ? ' has-error' : '' }} " style="display: none">
								<label id="lbl_horat" class="col-md-4 control-label" for="horat">Hora_Tar:</label>
								<div class="col-md-8">
									<input maxlength="11" id="horat" OnKeyPress="formatar('##:##-##:##', this)" name="horat" value="{{ old('horat'), '' }}" class="form-control input-md" type="text">
								</div>

								@if ($errors->has('horat'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('horat') }}</strong>
                                    </span>
                            	@endif
							</div>

                            <div class="form-group col-md-12 {{ $errors->has('documento') ? ' has-error' : '' }}">
                            	<label class="col-md-2 control-label">Documentos Necessários: </label>

                                <label class="checkbox-inline"><input type="checkbox" id="chk1" name="documento[]" value="RG" @if(is_array(old('documento')) && in_array("RG", old('documento'))) checked @endif>RG</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk2" name="documento[]" value="CPF" @if(is_array(old('documento')) && in_array("CPF", old('documento'))) checked @endif>CPF</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk3" name="documento[]" value="COMPROVANTE DE RESIDÊNCIA" @if(is_array(old('documento')) && in_array("COMPROVANTE DE RESIDÊNCIA", old('documento'))) checked @endif>Comprov. Residência</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk4" name="documento[]" value="CARTEIRA DE TRABALHO" @if(is_array(old('documento')) && in_array("CARTEIRA DE TRABALHO", old('documento'))) checked @endif>Carteira de Trabalho</label>
                                <label class="checkbox-inline"><input type="checkbox" id="chk5" name="documento[]" value="HABILITAÇÃO A" @if(is_array(old('documento')) && in_array("HABILITAÇÃO A", old('documento'))) checked @endif>Habilitação A</label>

                                @if ($errors->has('documento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('documento') }}</strong>
                                    </span>
                                @endif
                            </div>
							<div class="col-md-3"></div>
							<div class="col-md-9">
								<div class="form-group">
										<button type="submit" class="btn btn-success">Cadastrar</button>
										<button type="reset" class="btn btn-danger">Cancelar</button>
								</div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
		
@endsection