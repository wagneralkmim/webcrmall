@extends('templates/layout-back')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title">Cadastro de Clientes</h3>
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-12">
				@if(Session::get("mensagem"))
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					{{Session::get("mensagem")}}
				</div>
				@endif
			</div>
		</div>
		<a href="{{ url('customers/create' ) }}" title="Adicionar cliente" class="btn btn-primary">
			<i class="fa fa-plus-square"></i> Adicionar cliente
		</a><br>
		<table class="table table-bordered table-condensed table-hover"><br>
			<thead>
				<tr>
					<th>Nome</th>
					<th>Data de Nascimento</th>
					<th>Sexo</th>
					<th>CEP</th>
					<th>Endereço</th>
					<th>Número</th>
					<th>Complemento</th>
					<th>Bairro</th>
					<th>Estado</th>
					<th>Cidade</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
			@if(isset($customers) && count($customers)>0)
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ date('d/m/Y', strtotime($customer->birthdate)) }}</td>
                    <td>{{ $customer->gender_tax }}</td>
                    <td>{{ $customer->zip_code }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->number }}</td>
                    <td>{{ $customer->complement }}</td>
                    <td>{{ $customer->neighborhood }}</td>
                    <td>{{ $customer->state }}</td>
                    <td>{{ $customer->city }}</td>
                    <td>
                    	{!! Form::open(['action' => ['CustomerController@edit', $customer->id], 'method' => 'get', 'class' => 'form-display']) !!}
                    	<button type="submit" title="Editar Cliente" class="btn btn-info btn-xs "><i class="fa fa-edit"></i> Editar </button>
                    	{!! Form::close() !!}
                    	{!! Form::open(['action' => ['CustomerController@destroy', $customer->id], 'method' => 'delete', 'class' => 'form-display']) !!}
                    	<button type="submit" title="Remover Cliente" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Remover </button>
                    	{!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                	<td colspan="11">{{ "Não existem clientes cadastrados."}}</td>
                </tr>
                @endif
			</tbody>
		</table>
	</div>
</div>
@stop