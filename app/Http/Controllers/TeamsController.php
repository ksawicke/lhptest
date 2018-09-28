<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{

    public function index() {

        $teams = Team::all()->sortBy('name', false);

        return view('teams.index', compact('teams'));

    }

    public function show($id) {

        $team = Team::find($id);

        return view('teams.show', compact('team'));

    }

    public function addnewteam() {

        return view('teams.addnewteam');

    }

    public function store() {

        $this->validate(request(), [

            'name' => 'required'

        ]);


        Team::create(request(['name']));

        return redirect('/teams/index');
    }

}
