@extends('user.layout')
@section('member')
<form method="post" action="update" >
 	{{csrf_field()}}
 	
 	<div class="tab">

    <br><br><h1 style="color:#D4AF37">Update User Profile</h1>
    <br><br>
 	<input type="hidden" name="id" value="{{Auth::user()->id}}"/>
 	<td><label>Name:
 	<input type="text" name="name" value="{{Auth::user()->name}}"/></td></label>
 	<br>
 	<td><label>Email:</label>
 	<input type="email" name="email" value="{{Auth::user()->email}}"/></td>
 	<br>
 	<label>Address:</label>
 	<input type="text"  name="address" value="{{Auth::user()->address}}"/>
   <br>
 	<label>Country:</label>
    <select name="country">
 	<option value="{{Auth::user()->country}}">{{Auth::user()->country}}
 	</option>
 	<option value="I">Indonesia</option>
    <option value="M">Malaysia</option>
 	</select>
 	<br>
 	<label>State:</label>
 	<select name="state">
 	<option value="{{Auth::user()->state}}">{{Auth::user()->state}}
 	</option>
 	<option value="Sabah">Sabah</option>
    <option value="Sarawak">Sarawak</option>
 	</select>
 	<br>
 	<label>City:</label>
 	<input type="text" name="city" value="{{Auth::user()->city}}"/>
 	<br>
 	<label>Postcode:</label>
 	<input type="text" name="postcode" value="{{Auth::user()->postcode}}"/>
 	<br>
 	<label>Contact:</label>
 	<input type="text" name="contact" value="{{Auth::user()->contact}}"/>
 	<input type="submit" value="Update">
 </div>
 </form> 	
@endsection