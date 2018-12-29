@extends('admin.layout')
@section('header')
<style>
.tab{
	margin:0;
	height:40vh;
	width:5vw;
	 border-collapse: collapse;
}
.td{
	color:#C71585;
	height:20vh;
	width:5vh;
	border: 1px solid #dddddd;
    text-align: left;
	padding:0 15px 0 15px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
​.dropbtn {
   	
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#E0FFFF;	
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #1E90FF;}
 .dropbtn {background-color:#FF1493;}
</style>
@stop
@section('member')

<table align="center">
<br><br><br><br><p><a style="font-size:30px;color:#00CED1;   ">Member Details</a></p>

        <div class="tab">
        <tr>
               <th>Status</th>
           	  <th>UserID</th>
              <th>Merchant</th>
              <th>Cash Reward</th>
              <th>Cash Transfer</th>
              <th>Date</th>
               <th>Name</th>
               <th>Email</th>
               <th>Contact</th>
        </tr> 
          @foreach ($users as $user)
            <tr>
            <td><a class="td">{{ $user->status }}</a></td>
            <td><a class="td">{{ $user->userid }}</a></td>
            <td><a class="td">{{ $user->merchant }}</a></td>
            <td><a class="td">{{ $user->cashreward }}</a></td>
            <td><a class="td">{{ $user->cashtransfer }}</a></td>
            <td><a class="td">{{ $user->purchasedate }}</a></td>
              <td><a class="td">{{ $user->name }}</a></td>
              <td><a class="td">{{ $user->email }}</a></td>
              <td><a class="td">{{ $user->contact }}</a></td>
@endforeach
@stop