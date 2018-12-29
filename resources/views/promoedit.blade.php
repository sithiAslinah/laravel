@extends('admin.layout')
@section('header')
<style>
 input[type=submit]{
 	background color:#D4AF37";                                                                                                                      }
</style>
@stop
@section('member')
 <form method="post" action="promoedit">
 	{{csrf_field()}}
 	
 	<div class="tab">
 	<br><br><h1 style="color:#D4AF37">Update Promotion Details</h1>
    <br><br>
    <input type="hidden" name="id" value="{{$users->id}}"/>
 	<td><label>Title:</label>
 	<input type="text" name="title" value="{{$users->title}}"/></td>
 	<br>
 	<label>Description:</label>
 	<input type="text" name="description" value="{{$users->description}}"/>
 	<input type="submit" value="Edit">
 </div>
 </form> 	
@endsection