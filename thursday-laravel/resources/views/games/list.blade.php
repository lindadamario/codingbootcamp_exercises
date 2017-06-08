@section('content')
    
    <h1>List of games</h1>

    <ul>
        @foreach($games as $game)
            <li>
                <a href="<?php echo route('game detail', [$game->id]); ?>">{{ $game->name }}</a>
            </li>
        @endforeach
    </ul>

@endsection

@extends('document')