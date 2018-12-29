@extends('admin.layout')
@section('header')
<style>
 input[type=submit]{
 	background color:#D4AF37";                                                                                                                           
 }
</style>
@stop
@section('member')
 <form method="post" action="adminupdate">
 	{{csrf_field()}}
 	
 	<div class="tab">

    <br><br><h1 style="color:#D4AF37">Update User Profile</h1>
    <br><br>
 	<input type="hidden" name="id" value="{{$users->id}}"/>
 	<td><label>Name:
 	<input type="text" name="name" value="{{$users->name}}"/></td></label>
 	<br>
 	<td><label>Email:</label>
 	<input type="email" name="email" value="{{$users->email}}"/></td>
 	<br>
 	<label>Address:</label>
 	<input type="text"  name="address" value="{{$users->address}}"/>
   <br>
 	<label>Country:</label>
    <select name="country">
 	<option value="{{$users->country}}">{{$users->country}}
 	</option>
 	<option value="I">Indonesia</option>
    <option value="M">Malaysia</option>
 	</select>
 	<br>
 	<label>State:</label>
 	<select name="state">
 	<option value="{{$users->state}}">{{$users->state}}
 	</option>
 	<option value="Sabah">Sabah</option>
    <option value="Sarawak">Sarawak</option>
 	</select>
 	<br>
 	<label>City:</label>
 	<input type="text" name="city" value="{{$users->city}}"/>
 	<br>
 	<label>Postcode:</label>
 	<input type="text" name="postcode" value="{{$users->postcode}}"/>
 	<br>
 	<label>Contact:</label>
 	<input type="text" name="contact" value="{{$users->contact}}"/>
 	<input type="submit" value="Edit">
 </div>
 </form> 	
@endsection