@extends('admin.layout')
@section('header')
<style>
.tab{
	margin-top:-180px;
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
<br><br><br><br><p><a style="font-size:30px;color:#00CED1;   ">Admin Details</a></p>

        <div class="tab">
        <tr>
           	
              <th>Email</th>
              <th>Password</th>
        </tr> 
          @foreach ($users as $user)
            <tr>
            <td><a class="td">{{ $user->email }}</a></td>
            <td><a class="td">{{ $user->password }}</a></td>
<td><div class="dropdown">
 <button class="dropbtn"><a style="color:#fff;">MORE</a>
 </button>
 <input type = "hidden" name="userid" value = "{{ $user->id }}"/>
 <div class="dropdown-content">
 <a href="{{route('adminedit',$user->id)}}">Edit</a>
</td>
<td><button class="dropbtn" ><a href='erase/{{$user->id}}'>DELETE</a></button></td>  </div>
</div>
 </div></div>
</tr>
  

 @endforeach
    
</table>
@stop
