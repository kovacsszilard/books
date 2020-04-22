<?php

namespace App\Http\Controllers\api;

use App\Book;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Customer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rec = new Customer();
        $rec->firstname = $request->firstname;
        $rec->lastname = $request->lastname;
        $rec->adres = $request->adres;
        $rec->email = $request->email;
        $rec->phone = $request->phone;
        $rec->save();
        return $rec;
    }
    public function show($id)
    {
        return Customer::find($id);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rec = Customer::find($id);
        $rec->firstname = $request->firstname;
        $rec->lastname = $request->lastname;
        $rec->adres = $request->adres;
        $rec->email = $request->email;
        $rec->phone = $request->phone;
        $rec->save();
        return $rec;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $id)
    {
        $rec = Customer::destroy($id);
        return $rec;
    }
}
