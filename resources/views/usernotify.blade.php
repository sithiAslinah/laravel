   @extends('user.layout')
   @section('member')
   <table align="center">
<br><p><a style="font-size:30px;color:#00CED1;">Notification</a></p>
   @foreach ($users as $user)
         <p style="background-color:#FFFFF0;">{{ $user->content }}</p>
    @endforeach
    @endsection
   
