<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\affiliate;

class affiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('affiliate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $affiliate = new affiliate;
        $affiliate->username = Input::get('username');
        $affiliate->email = Input::get('email');
        $affiliate->password = Input::get('password');
        $affiliate->address = Input::get('address');
        $affiliate->country = Input::get('country');
        $affiliate->state = Input::get('state');
        $affiliate->city = Input::get('city');
        $affiliate->postcode=Input::get('postcode');
        $affiliate->contact = Input::get('contact');
        $affiliate->type = Input::get('type');
        $affiliate->referral = Input::get('referral');
        $affiliate->dob = Input::get('dob');
         $affiliate->save();   
         return redirect('/affiliate'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
         $Affiliate = DB::select('select * from Affiliate');
        return view('findAf',['Affiliate'=>$Affiliate]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
