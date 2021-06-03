<div class="form-body">
	<div class="form-group">
		<label class="col-md-4 control-label">Division Name<span class="required">*</span></label>
		<div class="col-md-8">
			{!! Form::text('NAME', $value = null, array('id'=>'NAME', 'class' => 'form-control', 'required'=>"")) !!}
			@if($errors->has('NAME'))<span class="required">{{ $errors->first('NAME') }}</span>@endif
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-offset-4 col-md-8">
			{!! Form::submit('Submit', array('class' => "btn btn-primary")) !!} &nbsp;
			<a href="{{  url('/division') }}" class="btn btn-success">Back</a>
		</div>

	</div>
</div>