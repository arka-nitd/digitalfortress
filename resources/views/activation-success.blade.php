@extends('layouts.app')


@section('content')

    <div class="col-md-6 col-sm-6  col-sm-offset-3">

        <div class="card card-login" id="account-failed">
            <div class="card-header text-center" data-background-color="green">
                <h3 class="card-title">Account Activation Successful</h3>
            </div>
            <br>
            <div class="card-content">
                <p class="text-center">
                    Account activation was successful. Proceed to login <br>
                </p>
            </div>
            <div class="card-footer text-center">
                <a href="/dashboard" class="btn btn-success">Continue to login</a>
            </div>
            <!-- card content ends here -->
        </div>

    </div>
@endsection