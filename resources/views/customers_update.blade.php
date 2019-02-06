@extends('templates/layout-back')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Editar Cliente</h3>
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
		{!! Form::open(['route' => ['customers.update', $customer->id], 'method' => 'patch']) !!}
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('full_name', '* Nome completo') !!}  
					{!! Form::text('full_name', $customer->full_name, ['class'=>'form-control']) !!}
				</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php $customerBirthdate = date('Y-m-d', strtotime($customer->birthdate)); ?> 
					{!! Form::label('birthdate', '* Data de nascimento') !!} 
					{!! Form::date('birthdate', $customerBirthdate, ['id' => 'customer_birthdate', 'class'=>'form-control']) !!}
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
		            <label for="gender_tax">* Gênero</label>
					<div class="radio">
					 	<label>
					 		@if($customer->gender_tax == 'Masculino')
					    	<input type="radio" name="gender_tax" id="optionsRadios1" value="Masculino" checked>
					    	Masculino
					    	@else
					    	<input type="radio" name="gender_tax" id="optionsRadios1" value="Masculino">
					    	Masculino
					    	@endif
					  	</label>
					 	<label>
					 		@if($customer->gender_tax == "Feminino")
					    	<input type="radio" name="gender_tax" id="optionsRadios2" value="Feminino" checked>
					    	Feminino
					    	@else
					    	<input type="radio" name="gender_tax" id="optionsRadios2" value="Feminino">
					    	Feminino
					    	@endif
					  </label>
	            	</div>     
			   </div>
		    </div>
		</div>  
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					{!! Form::label('zip_code', 'CEP') !!}  
					{!! Form::text('zip_code', isset($customer->address) ? $customer->zip_code : null, ['class'=>'form-control', 'placeholder' => "_____-___", 'id' => 'zip_code']) !!}
				</div>	
			</div>
		</div>
		<div id="address-result">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('address', 'Logradouro') !!}  
						{!! Form::text('address', isset($customer->address) ? $customer->address : null , ['class'=>'form-control', 'id'=>"address_street"]) !!}
					</div>
				</div>		
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('number', 'Número') !!}  
						{!! Form::text('number', isset($customer->number) ? $customer->number : null, ['class'=>'form-control']) !!}
					</div>
				</div>	
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('complement', 'Complemento') !!}  
						{!! Form::text('complement', isset($customer->complement) ? $customer->complement : null, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('neighborhood', 'Bairro') !!}  
						{!! Form::text('neighborhood', isset($customer->neighborhood) ? $customer->neighborhood : null, ['class'=>'form-control', 'id' => 'address_neighborhood']) !!}
					</div>
				</div>	
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('state', 'Estado') !!}  
						{!! Form::text('state', isset($customer->state) ? $customer->state : null, ['class'=>'form-control', 'id' => 'address_state']) !!}
					</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('city', 'Cidade') !!}  
						{!! Form::text('city', isset($customer->city) ? $customer->city : null, ['class'=>'form-control', 'id' => 'address_city']) !!}
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