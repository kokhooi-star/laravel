@extends('layouts.default')

@section('content')

	<h1 class="page-header">
		{{ $place->name }}
		<div class="pull-right">{{ link_to_route('places.index', trans('Back to List'), null, ['class' => 'btn']) }}</div>
	</h1>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group">
                <li class="list-group-item">{{ trans('Added at:') }} {{ $place->created_at }}</li>
                <li class="list-group-item">{{ trans('Updated at:') }} {{ $place->updated_at }}</li>
              </ul>
            <div class="badge">{{ ($place->halal) ? trans('Halal') : trans('Non-halal') }}</div>
        </div>
    </div>

@stop