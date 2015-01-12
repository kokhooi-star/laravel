@extends('layouts.default')

@section('content')
	<h1 class="page-header">
		{{ trans('Add a New Place') }}
		<div class="pull-right">{{ link_to_route('places.index', trans('Back to List'), null, ['class' => 'btn']) }}</div>
	</h1>
    <div class="row">
        <div class="col-md-6">
        {{ Form::open(['route' => 'places.index']) }}

        	<div class="form-group">
        	    {{ Form::label('name', trans('Name')) }}
        	    {{ Form::text('name', null, ['class' => 'form-control']) }}
        	</div>

        	<div class="checkbox">
        	    <label>
        	      {{ Form::checkbox('halal', 1) }} {{ trans('Halal?') }}
        	    </label>
        	  </div>

        	<div class="form-group">
        	    {{ Form::submit(trans('Save'), ['class' => 'btn btn-primary']) }}
        	</div>

        {{ Form::close() }}
        </div>
    </div>
@stop