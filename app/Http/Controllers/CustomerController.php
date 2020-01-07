<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function list()
    {
        // firstly setting by > php artisan tinker
        // > Customer::all();

        // deleting > Customer::all(); we set variables getting results on active 1 or 0
        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();

        // dd($inactiveCustomers);
    
        // using compact() to pass data/variables ('activeCustomers', 'inactiveCustomers') to a view
        return view('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    } 

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|min:3', // required min 3 characters
            'email' => 'required|email', // required email format with @ (not just random text)
            'active' => 'required' 

        ]);

        // saving new input value
        $customer = new Customer();

        $customer->name = request('name'); // storing data name
        $customer->email = request('email'); // storing data email
        $customer->active = request('active'); // storing data active


        $customer->save(); // then save it

        return back();
    }
}
