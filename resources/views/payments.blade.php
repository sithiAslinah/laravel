@extends('user.layout')
@section('member')


<br>
<label>Welcome {{Auth::user()->name}}({{Auth::user()->id}})</label><br>
<label>Disc 20%</label>


@php($price = 1200)
@php($disc = 20)
@php($totalamount = $price-($disc/$price * 100))
@php($cashreward = $disc/$price * 100)
<br>Total Amount After Disc : RM {{$totalamount}}
<br>Total Cash Reward :  RM {{$cashreward}}
<form method="post">{{csrf_field()}}
	<input type="hidden" name="id" value="{{Auth::user()->id}}"/>
<br><input type ="text" name="card" placeholder="Enter Account Number" style="font-size:30px;" />
<input type ="submit" name="pay" value="Pay" style="background-color:#008080;font-size:30px;" />
</form>
@endsection