@extends('user.layout')
@section('member')
 <h3>Purchase</h3>
  <td><p><a href="https://www.lazada.com.my/"><img src="{{url('uploads/lazada.jpg')}}" width="400px" height="300px" /></a></td>
  <td><a href="https://www.zalora.com.my/"><img src="{{url('uploads/zalora.jpg')}}" width="400px" height="300px" /></a></p> </td>
   <td><a href="{{'oppo',Auth::user()->id}}"><img src="{{url('uploads/Oppo-A7X.jpg')}}" width="400px" height="300px" /></a></p> </td>
@endsection