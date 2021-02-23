<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameApiController extends Controller
{
    
    // display all the Games

    public function display() {

        return Game::all();
    }


    // display specific Game

    public function specific($game) {

        return Game::findOrFail($game);
    }


    // store the new Game

    public function store() {

        request()->validate([

            'title' => 'required',
            'kind' => 'required',
            'release_date' => 'required',
            'company' => 'required',
            'rate' => 'required',

        ]);

        Game::create([

            'title' => request('title'),
            'kind' => request('kind'),
            'release_date' => request('release_date'),
            'company' => request('company'),
            'rate' => request('rate'),

        ]);

        echo('New Game Created Successfully');

    }



    // update a Game

    public function update(Game $game) {

        request()->validate([

            'title' => 'required',
            'kind' => 'required',
            'release_date' => 'required',
            'company' => 'required',
            'rate' => 'required',

        ]);

        $game->update([

            'title' => request('title'),
            'kind' => request('kind'),
            'release_date' => request('release_date'),
            'company' => request('company'),
            'rate' => request('rate'),
            
        ]);

        echo($game->title . ' successfully updated');
    }




    // Delete a Game

    public function destroy(Game $game) {

        $game->delete();

        echo($game->title . ' successfully deleted');
    }
}
