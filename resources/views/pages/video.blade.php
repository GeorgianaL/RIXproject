@extends('app')

@section('content')
<div class="video-content">
<h2>{{ $video['name'] }}</h2>
<div class="video">
	{!! $video['embed'] !!}
</div>
<h3>Description</h3>
<div class="description">
	{{ $video['description'] }}
</div>
</div>
@endsection