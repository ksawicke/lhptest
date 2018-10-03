@extends('layouts.app')

@section('content')
<!--div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ url('/teams/index') }}"> View Teams </a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/logout') }}"> Logout </a>
                </div>
            </div>
        </div>
    </div>
</div-->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <task-view></task-view>
        </div>
    </div>
</div>
@endsection
