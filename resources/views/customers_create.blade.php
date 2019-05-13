@extends('templates/layout-back')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Adicionar Cliente</h3>
	</div>
	<div class="box-body">
		@if ( count($errors) > 0)
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					Erros encontrados:<br />
					<ul>
						@foreach ($errors->all() as $e)
						<li>{{ $e }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
		@endif
		{!! Form::open(['action' => 'CustomerController@store']) !!}
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('full_name', '* Nome completo') !!} 
					{!! Form::text('full_name', null, ['class'=>'form-control']) !!}
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::label('birthdate', '* Data de nascimento') !!} 
					{!! Form::date('birthdate', null, ['id' => 'customer_birthdate', 'class'=>'form-control']) !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="gender_tax">* Gênero</label>
					<div class="radio">
						<label>
							<input type="radio" name="gender_tax" id="optionsRadios1" value="Masculino">
							Masculino
						</label>
						<label>
							<input type="radio" name="gender_tax" id="optionsRadios2" value="Feminino">
							Feminino
						</label>
					</div>     
				</div>
			</div>
		</div>  
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('zip_code', 'CEP') !!}  
					{!! Form::text('zip_code', null, ['class'=>'form-control', 'placeholder' => "_____-___", 'id' => 'zip_code']) !!}
				</div>	
			</div>
		</div>
		<div id="address-result" class="hidden">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('address', 'Logradouro') !!}  
						{!! Form::text('address', null, ['class'=>'form-control', 'id'=>"address_street"]) !!}
					</div>
				</div>		
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('number', 'Número') !!}  
						{!! Form::text('number', null, ['class'=>'form-control', 'id' =>"address_number"]) !!}
					</div>
				</div>	
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('complement', 'Complemento') !!}  
						{!! Form::text('complement', null, ['class'=>'form-control', 'id' => "address_complement"]) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('neighborhood', 'Bairro') !!}  
						{!! Form::text('neighborhood', null, ['class'=>'form-control', 'id' => 'address_neighborhood']) !!}
					</div>
				</div>	
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('state', 'Estado') !!}  
						{!! Form::text('state', null, ['class'=>'form-control', 'id' => 'address_state']) !!}
					</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('city', 'Cidade') !!}  
						{!! Form::text('city', null, ['class'=>'form-control', 'id' => 'address_city']) !!}
					</div>	
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				{!! Form::submit('Finalizar', ['class' => 'btn btn-primary']) !!}
				<a class="btn btn-primary" href="{{ url('/') }} ">Cancelar</a>
			</div>
		</div>
		{!! Form::close() !!}   
	</div>
</div>
@stop

@section('scripts')
<script src="{{ asset('js/viacep.js') }}"></script>
@stop