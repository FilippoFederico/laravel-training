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
        dd(request('name'));
    }
}
