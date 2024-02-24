@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4">@lang('books.edit') @lang('books.title')</h2>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="title">@lang('books.title'):</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}" required>
        </div>
        
        <div class="form-group">
            <label for="author">@lang('books.author'):</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary mt-4">@lang('books.edit')</button>
    </form>
</div>
@endsection
