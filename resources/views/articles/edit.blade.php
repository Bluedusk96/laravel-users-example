@extends('app')

@section('title')
Edit article
@stop

@section('content')
<h1>Edit article </h1>
<hr />
{!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
	@include('articles.form', ['submitButtonText' => 'Update', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop