<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function list()
    {
        // firstly setting by > php artisan tinker
        // > Customer::all();

        $customers = Customer::all();

        // dd($customers);
    
        return view('internals.customers', [
            'customers' => $customers,
        ]);
    } 

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3'
        ]);

        // saving new input value
        $customer = new Customer();
        $customer->name = request('name'); // the name is located in > request('name')
        $customer->save(); // then save it

        return back();
    }
}
