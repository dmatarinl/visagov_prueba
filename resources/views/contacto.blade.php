@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">@lang('contact.contact_us')</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">@lang('contact.email')</label>
            <input type="email" class="form-control" name="email" placeholder="@lang('contact.email_placeholder')">
        </div>
        <div class="form-group">
            <label for="message">@lang('contact.message')</label>
            <textarea class="form-control" name="message" rows="3" id="message" maxlength="1000"></textarea>
            <div id="characterCount" style="text-align: right;">@lang('contact.character_count')</div>
        </div>
        <button type="submit" class="btn btn-primary mt-2">@lang('contact.send_message')</button>
    </form>
</div>
@endsection
