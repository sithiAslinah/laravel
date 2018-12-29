<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\promote;
use Illuminate\Support\Facades\Input;
use App\file;
use DB;
use Illuminate\Http\UploadedFile;

class promotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('promotion');
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
    public function saved(Request $request)
    {
     $promotion = new promote;
     $promotion->title=Input::get('title');
     $promotion->description=Input::get('description');
     $promotion->profile= Input::file("profile"); 
     $promotion->move('uploads', $promotion->getClientOriginalName());
     $promotion->save();   
     return redirect ('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $users = DB::select('select * from promote');
        return view('userhome',['users'=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promo(){
        $users = DB::select('select * from promote');
        return view('promotionview',['users'=>$users]);
    }
    public function promoedit($id)
    {
         $users = promote::find($id);
           return view('promoedit',compact('users','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promoupdate(Request $request, $id)
    {
      $id = $request->input('id');
      $title = $request->input('title');
      $description = $request->input('description');
      
      
      DB::update('update promote set title = ?,description = ? where id = ?',[$title,$description,$id]);
      echo "Record updated successfully.<br/>";
      return redirect('promotionview');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function promodel($id)
    {
        DB::delete('delete from promote where id = ?',[$id]);
        return redirect ('/promotionview');
    }
}
