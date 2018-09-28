@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <strong>Add New Team</strong>

                <br /><br />

                <div id="newTeamForm" class="form-group">

                    <form method="post" action="{{ url('/teams/add') }}">

                        {{ csrf_field() }}

                        <label for="name">Team Name:</label>

                        <input type="text" class="form-control" id="name" name="name" v-model="name">
                        <button class="btn btn-primary btn-sm">Save</button>

                    </form>

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

    <script>
        let data = {
            name: 'Team Name here...'
        }

        new Vue({
            el: '#newTeamForm',
            data: data
        })
    </script>
@endsection
