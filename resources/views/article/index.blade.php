@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Добавить статью</a>
    <table class="table">
        <thead>
            <tr>
                <td>Название</td>
                <td>Действия</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td><a class="text-decoration-none" href="{{ route('articles.show', $article) }}">{{ $article->name }}</a></td>
                    <td>
                        <a class="text-decoration-none" href="{{route('articles.edit', $article->id)}}">Редактировать</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Вы уверены?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-danger p-0 m-0 align-baseline">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection