@extends('admin.layout')
@section('header')
<style>
 input[type=submit]{
 	background color:#D4AF37";                                                                                                                           
 }
</style>
@stop
@section('member')
 <form method="post" action="adminedit">
 	{{csrf_field()}}
 	
 	<div class="tab">

    <br><br><h1 style="color:#D4AF37">Update User Profile</h1>
    <br><br>
    <input type="hidden" name="id" value="{{$users->id}}"/>
 	<td><label>Email:</label>
 	<input type="email" name="email" value="{{$users->email}}"/></td>
 	<br>
 	<label>Password:</label>
 	<input type="text" name="password" value="{{$users->password}}"/>
 	<input type="submit" value="Edit">
 </div>
 </form> 	
@endsection