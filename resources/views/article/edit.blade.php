@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
        @include('article.form')
    {{ html()->submit('Обновить')->class('btn btn-primary') }}
{{ html()->closeModelForm() }}
@endsection