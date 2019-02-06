<?php

namespace App\Http\Controllers;

use Session;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers_table', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customers_create');
    }

    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->full_name = $request->get('full_name');
        $customer->birthdate = $request->get('birthdate');
        $customer->gender_tax = $request->get('gender_tax');
        $customer->address = $request->get('address');
        $customer->zip_Code = $request->get('zip_code');
        $customer->number = $request->get('number');
        $customer->complement = $request->get('complement');
        $customer->neighborhood = $request->get('neighborhood');
        $customer->state = $request->get('state');
        $customer->city = $request->get('city');
        $customer->save();

        Session::flash('mensagem', 'Cadastro de cliente realizado com sucesso.');
        return redirect('/');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers_update', ['customer' => $customer]);
    }

    public function show($id)
    {
        return $this->edit($id);
    }

    public function update($id, CustomerRequest $request)
    {
        $customer = Customer::find($id);
        $customer->full_name = $request->get('full_name');
        $customer->gender_tax = $request->get('gender_tax');
        $customer->birthdate = $request->get('birthdate');
        $customer->address = $request->get('address');
        $customer->zip_Code = $request->get('zip_code');
        $customer->number = $request->get('number');
        $customer->complement = $request->get('complement');
        $customer->neighborhood = $request->get('neighborhood');
        $customer->state = $request->get('state');
        $customer->city = $request->get('city');
        $customer->save();

        Session::flash('mensagem', 'Cadastro de cliente atualizado com sucesso.');
        return redirect('/');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id)->delete();
        Session::flash('mensagem', 'Cliente excluído com sucesso.');
        return redirect('/');
    }
}
