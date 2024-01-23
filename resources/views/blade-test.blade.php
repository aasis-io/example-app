@extends('layouts.master')

@section('content')
    <main>

        @if (false)
            <h3>Site Contents!</h3>
        @elseif(false)
            <h3>Hello! I am from else if part!</h3>
        @else
            <h3>I am rendering from else part!</h3>
        @endif


        @php
            echo 'hello';
        @endphp

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero architecto dolores aspernatur dolorem dolorum
            iure provident laborum quidem. Tempore, maxime?</p>
    </main>
@endsection
