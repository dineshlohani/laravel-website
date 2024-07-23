<!-- resources/views/search/results.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>
        @if($results->isEmpty())
            <p>No results found for "{{ request()->input('query') }}"</p>
        @else
            <ul>
                @foreach($results as $result)
                    <li>{{ $result->field }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
