@extends('layouts.app')
@include('layouts.menu')
@section('breadcrumb')
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{ url('/') }}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
		<li>
			<span>Division List</span>
		</li>
	</ul>
	<div class="page-toolbar">
		<div class="pull-right">
			<i class="icon-calendar"></i>&nbsp;
			<span class="thin uppercase hidden-xs">{{ date('D, M d, Y') }}</span>&nbsp;
		</div>
	</div>
</div>
<!-- END PAGE BAR -->
@stop
@section('content')


<div class="row">
	<div class="page-title">Division Edit</div>
	<div class="col-md-8 col-md-offset-1">
		{!! Form::model($division, array('url' => 'division/'.$division->ID, 'method' => 'PUT', 'role' => 'form', 'class' => 'form-horizontal')) !!}

		@include('Division::_from')

		{!! Form::close() !!}
	</div>
</div>

@endsection