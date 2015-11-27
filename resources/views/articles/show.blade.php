@extends('app')

@section('title')
{{$article->name}}
@stop

@section('content')
<h1>{{$article->name}}</h1>
<ul>
	<li>{{$article->title}}</li>
	<li>{{$article->body}}</li>
	<li>{{$article->excerpt}}</li>
</ul>
@stop