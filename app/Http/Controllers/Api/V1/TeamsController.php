<?php

namespace App\Http\Controllers\Api\V1;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function index() {
        return Team::orderBy('name')->get();
    }

    public function show($id) {
        return Team::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return $team;
    }

    public function store(Request $request) {
        $team = Team::create($request->all());
        return $team;
    }

    public function destroy($id) {
        $team = Team::findOrFail($id);
        $team->delete();
        return '';
    }

}

//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use App\Team;
//
//class TeamsController extends Controller
//{
//
//    public function index() {
//
//        $teams = Team::all()->sortBy('name', false);
//
//        return view('teams.index', compact('teams'));
//
//    }
//
//    public function show($id) {
//
//        $team = Team::find($id);
//
//        return view('teams.show', compact('team'));
//
//    }
//
//    public function addnewteam() {
//
//        return view('teams.addnewteam');
//
//    }
//
//    public function store() {
//
//        $this->validate(request(), [
//
//            'name' => 'required'
//
//        ]);
//
//
//        Team::create(request(['name']));
//
//        return redirect('/teams/index');
//    }
//
//}
