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
    
        return view('internals.customers', [
            'customers' => $customers,
        ]);
    } 

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3', // required min 3 characters
            'email' => 'required|email' // required email format with @ (not just random text)
        ]);

        // saving new input value
        $customer = new Customer();

        $customer->name = request('name'); // storing data name
        $customer->email = request('email'); // storing data email

        $customer->save(); // then save it

        return back();
    }
}
