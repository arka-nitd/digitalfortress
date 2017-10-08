@extends('layouts.app')


@section('content')

    <div class="col-md-6 col-sm-6  col-sm-offset-3">

        <div class="card card-login">
            <div class="card-header text-center" data-background-color="red">
                <h3 class="card-title">Account Activation Failed!</h3>
            </div>
            <br>
            <div class="card-content">
                <p class="text-center">
                    Oops... Account could not be activated. Please try again or: <br>
                </p>
            </div>
            <div class="card-footer text-center">
                <a href="/resend-activation" class="btn btn-info">Resend Activation Link</a>
            </div>
            <!-- card content ends here -->
        </div>

    </div>
@endsection