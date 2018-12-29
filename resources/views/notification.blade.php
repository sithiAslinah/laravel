@extends('admin.layout')
@section('header')
<style>
 .h1{
            height:10vh;
            color:#000000; 
          }
            .tab{
               font-family: 'Nunito', sans-serif;
               width:5vw;
               height:20vh;
               bottom:400px;
               position: fixed;
                }
            .td{
               font-size:20px;
               width:20vw;
              
            }
       
            input[type=text],
            input[type=checkbox],
            select{
               width:10vw;
               height:5vh;
               font-size:20px; 
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
@section('member')

<form action="store" method="POST" enctype="multipart/form-data"  style="bottom: 10px;">

<div class="tab"><div class="td">
  <label style="bottom: 20px; font-size: 40px;">Notification:  </label><br>
  <label>Content:</label>&nbsp&nbsp<input type="text" name="content" placeholder="content" style="width: 890px;">
  {{csrf_field()}}
   <br>
   <label>To:</label><br><input type="checkbox" name="to[]" value="Affliate">Affiliate<br>
   <input type="checkbox" name="to[]" value="Merchant">Merchant<br>
   <input type="checkbox" name="to[]" value="member">Member<br>
   <input type="submit" value="submit"></div></div>
</form>
@endsection