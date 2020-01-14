@extends('template.template')

@section('header')
<img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="/">Login</a>
        </li>
        <li>
            <a href="/">Contact</a>
        </li>
    </ul>
    
@endsection

@section('content')
    @foreach ($cds as $cd)
        <div class="cd">
            <img src="{{ $cd['poster'] }}" />
            <h3>{{ $cd['title'] }}</h3>
            <small>{{ $cd['author'] }}</small>
            <strong>{{ $cd['year'] }}</strong>
        </div>
    @endforeach
@endsection