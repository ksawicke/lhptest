@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <strong>
                    @if ($player->id == 0)
                        Add New
                    @else
                        Edit
                    @endif
                    Player</strong>

                <br /><br />

                <div id="root">

                    <div id="newplayerform" class="form-group">

                        @if ($player->id == 0)
                            <form method="post" action="{{ url('/players/add/') }}">
                        @else
                            <form method="post" action="{{ url('/players/' . $player->id) }}">
                            <input name="_method" type="hidden" value="PATCH">
                        @endif

                            {{ csrf_field() }}

                            <label for="team_id">Team:</label>

                            <br />

                            <select id="team_id" name="team_id" v-model="player.team_id">

                                <option value="0">Select one:</option>

                                @foreach ($teams as $team)

                                    <option value="{{ $team->id }}">{{ $team->name }}</option>

                                @endforeach

                            </select>

                            <br /><br />

                            <label for="first_name">First Name:</label>

                            <input type="text" class="form-control" id="first_name" name="first_name" v-model="player.first_name">

                            <label for="last_name">Last Name:</label>

                            <input type="text" class="form-control" id="last_name" name="last_name" v-model="player.last_name">

                            <br />

                            <button class="btn btn-primary btn-sm">Save</button>

                        </form>

                    </div>
                </div>

                @if (count($errors))

                    <div class="alert alert-danger">

                        <ul>

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}

                            @endforeach

                        </ul>

                    </div>

                @endif

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@2.1.3/dist/vue.js"></script>

    <script>
        let data = {
            player: {
                team_id: '{{ $player->team_id }}',
                first_name: '{{ $player->first_name }}',
                last_name: '{{ $player->last_name }}'
            }
        };

        new Vue({
            el: '#root',
            data: data
        });

        Vue.config.devtools = true;
    </script>
@endsection
