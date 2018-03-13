@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="card text-center">
            <div class="card-header" data-background-color="red">
                <h3 class="title text-success">Round Locked!</h3>
            </div>
            <div class="card-content text-center">
                <h5 >This round is currently locked. <br> 
                Try polishing your mind till then. ;)</h5>
                <h6>Check out the leaderboard <a href="/leaderboard">here</a></h6>
            </div>
            <div class="card-footer">
                <div class="stats text-center">
                    <i class="material-icons">games</i>Made with &hearts; by GLUG NIT DGP.
                </div>
            </div>
        </div>
    </div>

@stop