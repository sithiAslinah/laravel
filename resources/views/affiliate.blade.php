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
               height:10vh;
                }
            .td{
               font-size:20px;
               width:20vw;
              
            }
            .gen{
               font-size:20px;
               width:20vw;
            }
            .space{
               width:6vh; 
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
<div class="h1">
Create Affliate
</div>
<?php
echo Form::open(array('url' => '/store'));
         echo '<table>';
         echo '<h1>Create Affliate</h1>';
         echo '<tr>';
         echo '</tr>';
         echo '<tr>';
         echo '<div class="tab">';
         echo '<td class="td">';
         echo 'Enter Username';
         echo '<br>';
         echo Form::text('username');
         echo '<br>';
         echo 'Password';
         echo '<br>';
         echo Form::password('password');
         echo '<br>';
         echo 'Enter Email';
         echo '<br>';
         echo Form::email('email');
         echo '<br>';
         echo 'DOB';
         echo '<br>';
         echo Form::date('date', 'dob'); 
         echo '<br>';
         echo 'Address';
         echo '<br>';
         echo Form::text('address');
         echo '<br>';
         echo '</td>';
         echo '<td class="space">';
         echo '</td>';
         echo '</div>';
         echo '<td class="td">';
         echo 'Country';
         echo '<br>';
         echo Form::select('country', array('MALAY' => 'Malaysia', 'Indonesia' => 'Indonesia'));
         echo '<br>';
         echo 'State';
         echo '<br>';
         echo Form::select('state', array('s' => 'sabah', 'sa' => 'Sarawak'));
         echo '<br>';
         echo 'City';
         echo '<br>';
         echo Form::text('city');
         echo '<br>';
         echo 'Postcode';
         echo '<br>';  
         echo Form::text('postcode');
         echo '<br>';
         echo 'Contact Number';
         echo '<br>';
         echo Form::text('contact');
         echo '</td>';
         echo '<td class="space">';
         echo '</td>';
         echo '<td class="gen">';
         echo 'Type'; 
         echo '<br>';
         echo Form::select('Type', array('P' => 'Partner', 'N' => 'Normal'));
         echo '<br>';
         echo 'Referral';
         echo '<br>';
         echo Form::text('referral');
         echo '<br>';echo '<br>'; echo '<br>';echo '<br>'; echo '<br>';
         echo '<div class ="btn">';
         echo Form::submit('submit');
         echo '</div>';
         echo '</td>';  
         echo '</div>';echo '</div>';
         echo '</tr>';
         echo '</table>';
         echo Form::close();
      ?>
@endsection

