@extends('layouts.main')

@section('content')
	<h1>Your Items <small>(<a href="{{ URL::route('new') }}">New Task</a>)</small></h1>

	@foreach ($items as $item)
		<ul>
			{{ Form::open() }}
				<input type="checkbox" 
				onClick="this.form.submit()"
				value="{{ $item->id }}" 
				{{ $item->done ? 'checked' : '' }} 
				/>
				<div class="delete">
					<a href="{{ URL::route('delete', $item->id) }}">(x)</a>
				</div>

				<input type="hidden" name="id" value="{{$item->id}}" />

				{{ e($item->name) }} 

			{{ Form::close() }}
		</ul>
	@endforeach

@stop