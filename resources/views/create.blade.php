
@extends('admin.layout')
@section('header')
@stop
@section('member')
  <div class="container"><br><br><br>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
   <br><br><br>
    <h3 class="jumbotron" style="bottom: 20px;">Create Your Promotion</h3>
<form method="post" action="{{url('form')}}" enctype="multipart/form-data">
  {{csrf_field()}}

        
        <div class="input-group control-group increment" >
          <input type="text" name="title"  placeholder="Title" style="width:1000px;">
        </div><br>
        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" style="width:800px;">
        </div>
       <br>
         <div class="input-group control-group increment" >
          <input type="text" name="content"  placeholder="Content" style="width:1000px;">
        </div>
        

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>


<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>
@endsection
