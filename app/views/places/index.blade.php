@extends('layouts.default')

@section('content')
    <h1 class="page-header">
    	{{ trans('All Places') }}
    	<div class="pull-right">{{ link_to_route('places.create', trans('New'), null, ['class' => 'btn']) }}</div>
    </h1>

    @foreach ($places->chunk(4) as $placeSet)
        <div class="row">
            @foreach ($placeSet as $place)
                <div class="col-md-3">
                    <h2>{{ link_to_route('places.show', $place->name, ['id' => $place->id]) }}</h2>
                    {{ ($place->halal) ? trans('Halal') : trans('Non-halal') }}
                    <br>
                    {{ link_to_route('places.edit', trans('Edit'), ['id' => $place->id]) }} | 
                    {{ link_to_route('places.destroy', trans('Delete'), ['id' => $place->id], ['data-method' => "delete", 'data-confirm' => "Are you sure?"]) }}
                </div>
            @endforeach
        </div>
    @endforeach

@stop

@section('js')

@stop