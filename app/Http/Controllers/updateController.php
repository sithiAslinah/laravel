<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\user;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Http\UploadedFile;

class updateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::all();
        return view('memdetail',['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $users = User::find($id);
           return view('edit',compact('users','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminupdate(Request $request, $id)
    {
      $id = $request->input('id');
      $name = $request->input('name');
      $email = $request->input('email');
      $address = $request->input('address');
      $country = $request->input('country');
      $state= $request->input('state');
      $city = $request->input('city');
      $postcode = $request->input('postcode');
      $contact = $request->input('contact');

      DB::update('update users set name = ?,email = ?,address = ?, country =?,state = ?, city = ?,postcode =?,contact = ? where id = ?',[$name,$email,$address,$country,$state,$city,$postcode,$contact,$id]);
      echo "Record updated successfully.<br/>";
      return redirect('memdetail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from users where id = ?',[$id]);
        return redirect ('/dashboard');
    }
}
