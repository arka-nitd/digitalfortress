@extends('layouts.app')


@section('content')

    <div class="col-md-6 col-sm-6  col-sm-offset-3">

        <div class="card card-login" id="account-failed">
            <div class="card-header text-center" data-background-color="blue">
                <h3 class="card-title">Account Activation</h3>
            </div>
            <br>
            <div class="card-content">
                <p class="text-center">
                    Hi {{ $username }}, we sent an activation email {{ $email }}. <br>
                    Kindly verify your email address in order to have access to all our features.
                    If your didn't receive any mail, please click on the "Re-send Activation E-Mail" button below
                </p>
            </div>
            <div class="card-footer text-center">
                <a href="/resend-activation" class="btn btn-info">Resend activation link</a>
            </div>
            <!-- card content ends here -->
        </div>

    </div>
@endsection