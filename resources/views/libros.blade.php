@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="mt-4">@lang('books.header')</h2>
            <a href="{{ route('books.create') }}" class="btn btn-primary">@lang('books.add_book')</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>@lang('books.title')</th>
                        <th>@lang('books.author')</th>
                        <th>@lang('books.actions')</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">@lang('books.edit')</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">@lang('books.delete')</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
