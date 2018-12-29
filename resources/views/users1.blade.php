@extends('user.layout')
@section('member')
  

@foreach ($users as $user)
<table align="center"><tr><td>
<center><p style="font-size:30px;"><strong>{{$user -> title}}</strong></p></center>
    @php $filenames = json_decode($user->filename); @endphp
     @if(is_array($filenames) && !empty($filenames))
    @foreach ($filenames as $filename)    
       <img src="{{ url('images/' . $filename) }}"/>
    @endforeach
    @endif
   <br>
<center><a style="font-size:20px">{{$user -> content}}</a></center></td></tr>
</table>
@endforeach
@endsection