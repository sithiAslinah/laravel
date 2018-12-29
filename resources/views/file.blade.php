

{{Form::open(array('route' => 'file','enctype' => 'multipart/form-data'))}}
	<div class="row cancel">
		<div class="col-md-4">
			{!! Form::file('image', array('class' => 'image')) !!}
		</div>
		<div class="col-md-4">
			<button type="submit" class="btn btn-success">Create</button>
		</div>
	</div>
{{Form::close()}}

	