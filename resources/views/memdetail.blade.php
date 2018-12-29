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
           	  <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Country</th>
              <th>State</th>
              <th>City</th>
              <th>Postcode</th>
              <th>Contact</th>
        </tr> 
          @foreach ($users as $user)
            <tr>
            <td><a class="td">{{ $user->name }}</a></td>
            <td><a class="td">{{ $user->email }}</a></td>
            <td><a class="td">{{ $user->address }}</a></td>
            <td><a class="td">{{ $user->country }}</a></td>
            <td><a class="td">{{ $user->state }}</a></td>
            <td><a class="td">{{ $user->city }}</a></td>
            <td><a class="td">{{ $user->postcode }}</a></td>
            <td><a class="td">{{ $user->contact }}</a></td>
            

        
 
 <td><div class="dropdown">
 <button class="dropbtn"><a style="color:#fff;">MORE</a>
  </button>
 <input type = "hidden" name="userid" value = "{{ $user->id }}"/>
  <div class="dropdown-content">
    <a href="{{route('edit',$user['id'])}}">Edit</a>
    <a href="#">Purchase</a>
    <a href="#">Rewards</a>
</td>
<td><button class="dropbtn" ><a href='delete/{{$user->id}}'>DELETE</a></button></td>  </div>
</div>
 </div></div>
</tr>
  

 @endforeach
    
</table>
@stop
