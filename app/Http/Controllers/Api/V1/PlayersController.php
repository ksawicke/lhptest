<?php

namespace App\Http\Controllers\Api\V1;

use App\Player;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlayersController extends Controller
{
    public function index() {
        return Player::with('team')->orderBy('last_name')->orderBy('first_name')->get();
    }

    public function show($id) {
        return Player::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return $player;
    }

    public function store(Request $request) {
        $player = Player::create($request->all());
        return $player;
    }

    public function destroy($id) {
        $player = Player::findOrFail($id);
        $player->delete();
        return '';
    }

}

//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use App\Player;
//use App\Team;
//
//class PlayersController extends Controller
//{
//
//    public function addnewplayer() {
//
//        $teams = Team::all()->sortBy('name', false);
//
//        $player = new Player();
//        $player->id = 0;
//
//        return view('players.addnewplayer', compact('teams', 'player'));
//
//    }
//
//    public function editplayer(Player $player) {
//
//        $teams = Team::all()->sortBy('name', false);
//
//        return view('players.addnewplayer', compact('teams', 'player'));
//
//    }
//
//    public function store(Player $player) {
//
//        $this->validate(request(), [
//
//            'team_id' => 'integer|min:1',
//            'first_name' => 'required',
//            'last_name' => 'required'
//
//        ]);
//
//
//        if($player->id==0) {
//
//            Player::create(request(['team_id', 'first_name', 'last_name']));
//
//        } else {
//
//            $team_id = request()->input('team_id');
//            $first_name = request()->input('first_name');
//            $last_name = request()->input('last_name');
//
//            $player = Player::find($player->id);
//
//            $player->team_id = $team_id;
//            $player->first_name = $first_name;
//            $player->last_name = $last_name;
//
//            $player->save();
//
//        }
//
//        return redirect('/teams/index');
//    }
//
//    public function update(Player $player) {
//
//        $this->validate(request(), [
//
//            'team_id' => 'integer|min:1',
//            'first_name' => 'required',
//            'last_name' => 'required'
//
//        ]);
//
//        $team_id = request()->input('team_id');
//        $first_name = request()->input('first_name');
//        $last_name = request()->input('last_name');
//
//        $player = Player::find($player->id);
//
//        $player->team_id = $team_id;
//        $player->first_name = $first_name;
//        $player->last_name = $last_name;
//
//        $player->save();
//
//        return redirect('/teams/index');
//    }
//
//}
