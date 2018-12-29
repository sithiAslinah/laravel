@extends('admin.layout')
@section('header')
<style>
          
          h1{
            height:20vh;
            color:#00CED1; 
          }
            .tab{
               font-family: 'Nunito', sans-serif;
               width:5vw;
               height:20vh;
                }
            .td{
               font-size:20px;
               width:20vw;
              
            }
            input[type=text],
            input[type=password],
            input[type=email],
            input[type=date],
            select{
               width:20vw;
               height:5vh;
            }
            input[type=submit]{
               width:18vw;
               height:7vh;
               color:#fff; 
               background:#008B8B; 
               border-radius:2;
               text-transform: uppercase;
               font-family: 'Lato', sans-serif;
               box-shadow: 5 14px #000000;
            }
            input[type=submit]:hover{
               box-shadow:0 12px 18px 0 rgba(0,0,0,0.24),0 20px 60px 0 rgba(0,0,0,0.19);
            }
</style>
@stop
@section('memdetail')
<form action="saved" method="POST" file="true" enctype="multipart/form-data">
	{{csrf_field()}}
	<br><br><div class = tab><h1> Upload Promotion </h1><div class="td">
	<br>
	<input type = "text" name="description"  placeholder="description"/>
	<br><br>
	<input type = "text" name="title"  placeholder="title"/>
	<br><br>
	<input type = "file" name="profile"  placeholder="Image"/>
	<br><br>
	<input type="submit" name="submit" value="Enter"/>

</form></div></div>
@endsection