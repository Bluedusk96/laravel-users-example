@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Articles</h1>
@if (count($articles))
<ul>
	@foreach ($articles as $article)
		<article>
			<h2><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->name}}</a><h2>
			<ul>
				<li>{{$article->email}}</li>
				<li>{{$article->id}}</li>
				<li>{{$article->password}}</li>
			</ul>
		</article>
	@endforeach
</ul>
@else
<p>no articles</p>
@endif

@stop