@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <a href="{{ url('/teams/index') }}">
                    <button class="btn btn-success btn-sm">Show All Teams</button>
                </a>

                <a href="{{ url('/teams/addnewteam') }}">
                    <button class="btn btn-success btn-sm">Add Team</button>
                </a>

                <br /><br />

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><strong>Team Name</strong></th>
                        <th scope="col"><strong>Players</strong></th>
                        <th scope="col"><strong>Action</strong></th>
                    </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{ $team->name }}</th>
                            <th>

                                @if (count($team->players) > 0)

                                    <ul>

                                        @foreach ($team->players as $player)

                                            <li>
                                                {{ $player->first_name }} {{ $player->last_name }}
                                                <a href="{{ url('/players/editplayer/' . $player->id) }}">
                                                    <button class="btn btn-success btn-sm">Edit Player</button>
                                                </a>
                                            </li>

                                        @endforeach

                                    </ul>

                                @else


                                @endif

                            </th>
                            <td>

                                <a href="{{ url('/players/addnewplayer') }}">
                                    <button class="btn btn-success btn-sm">Add Player</button>
                                </a>

                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
