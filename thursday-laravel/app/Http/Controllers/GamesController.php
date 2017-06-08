<?php

namespace App\Http\Controllers;

use \DB;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    //
    public function __invoke($orderby = 'name', $orderway = 'asc')
    {
        // select games from database
        $games = DB::select("
            SELECT *
            FROM `game`
            WHERE 1
        ", []);

        // using orderby and orderway

        var_dump($orderby);
        var_dump($orderway);

        // resources/views/   games/list   .php
        $view = view('games/list');
        $view->games = $games; // put the games in the view

        return $view;
    }


    public function detail($id)
    {
        $games = DB::select("
            SELECT *
            FROM `game`
            WHERE `game`.`id` = ?
        ", [$id]);

        $game = $games[0];

        // detail of one game
        // passing values 1: second argument - array of values
        $view = view('games/detail', ['id' => $id]);

        // passing values 2: 'with' method
        $view = view('games/detail')->with(['id' => $id]);

        // passing values 3: creating new properties
        $view = view('games/detail');
        $view->id = $id;
        $view->game = $game;

        return $view;
    }
}
