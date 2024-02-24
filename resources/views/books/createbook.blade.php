@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-4">@lang('books.add_book')</h2>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">@lang('books.title'):</label>
            <input type="text" class="form-control" name="title" id="title" required>
        </div>
        <div class="form-group">
            <label for="author">@lang('books.author'):</label>
            <input type="text" class="form-control" name="author" id="author" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4">@lang('books.add_book')</button>
    </form>
</div>
@endsection
