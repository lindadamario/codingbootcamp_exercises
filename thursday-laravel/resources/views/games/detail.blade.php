@section('page_title')Detail of game {{ $id }}@endsection

@section('navigation')
    <nav>
        <a href="{{ route('list of games') }}">Back to list of games</a>
    </nav>
@endsection

@section('content')
<h1>{{ $game->name }}</h1>

<div class="game">
    <div class="image">
        <img src="<?php echo $game->image_url; ?>" />
    </div>
    <div class="info">
        <h2 class="name"><?php echo $game->name; ?></h2>
        <div class="release">Released at: <?php echo $game->released_at; ?></div>
        <div class="genres">
            
        </div>
        <div class="description">
            <?php echo $game->description; ?>
        </div>
        <div class="rating"><?php echo $game->rating; ?>%</div>        
    </div>
</div>
@endsection

@extends('document')