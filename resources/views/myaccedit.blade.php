@extends('user.layout')
@section('member')
<form>
 	{{csrf_field()}}
 	
 	<div class="tab">

    <br><br><h1 style="color:#D4AF37">My Account</h1>
 	<td><label>Name:</label>
{{Auth::user()->name}}</td>
 	<br>
 	<td><label>Email:</label>
 {{Auth::user()->email}}</td>
 	<br>
 	<label> Address: </label>
 {{Auth::user()->address}}</td>
   <br>
 	<label>Country:</label>

{{Auth::user()->country}}
 
 	<br>
 	<label>State:</label>
 	{{Auth::user()->state}}
 	<br>
 	<label>City:</label>
 {{Auth::user()->city}}
 	<br>
 	<label>Postcode:</label>
 	{{Auth::user()->postcode}}
 	<br>
 	<label>Contact:</label>
 {{Auth::user()->contact}}
 </div>
 <td><button class="dropbtn" ><a href="{{'myAcc'}}">Edit</a></button></td>
 </form> 
 
 <br><h1 style="color:#D4AF37">Purchase Details</h1>
 @foreach ($users as $user)

 <td>Purchase From:  {{$user->merchant}}</td><br>
  <td>Cash Reward:   {{$user->cashreward}}</td><br>
   <td>Purchase Date:  {{$user->created_at}}</td><br><br>

 @endforeach
@endsection