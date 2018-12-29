@extends('user.layout')
   @section('member')
   <img src="{{url('uploads/oppo.jpg')}}" width="400px" height="300px"  /><br><br>
  <label><strong>RM 1300</strong></label><br>
   <p>Enjoy 20% Special Off using your affiliate ID</p>
   <a href="{{'payments'}}"><button class="dropbtn" style="background-color: #1E90FF;font-size:30px;">Purchase</button></a>
    @endsection