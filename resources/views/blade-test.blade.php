@extends('layouts.master')

@section('content')
    <main>

        @if (true)
            <h3>Site Contents!</h3>
        @elseif(false)
            <h3>Hello! I am from else if part!</h3>
        @else
            <h3>I am rendering from else part!</h3>
        @endif

        @php
            $array = ['john doe', 'emma', 'brian'];
        @endphp

        <ul>
            @foreach ($array as $arr)
                <li>{{ $arr }}</li>
            @endforeach
        </ul>

        <ul>
            @for ($i = 0; $i < count($array); $i++)
                <li>{{ $array[$i] }}</li>
            @endfor
        </ul>

        @empty($array)
            <p>No items found.</p>
        @endempty

        @isset($array)
            <p>Array is set and has {{ count($array) }} items.</p>
        @endisset

        {{-- Example of including another Blade view --}}
        {{-- @include('view.name') --}}

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero architecto dolores aspernatur dolorem dolorum
            iure provident laborum quidem. Tempore, maxime?</p>
    </main>
@endsection
