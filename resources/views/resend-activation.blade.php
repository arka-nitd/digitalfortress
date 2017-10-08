@extends('layouts.app')


@section('content')

    <div class="col-md-6 col-sm-6  col-sm-offset-3">
        <div class="card card-login" id="resend-activation">
            <div class="card-header text-center" data-background-color="blue">
                <h3 class="card-title">Account Activation</h3>
            </div>
            <br>
            <div class="card-content">
                <div class="text-center">
                    @if($errors->any())
                        <span class="text-center text-danger">{{$errors->first()}}</span>
                    @endif
                </div>
                <form method="post" action="/resend-activation">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                        <div class="form-group label-floating">
                            <label class="control-label">Email address</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-info pull-right">Re-send Activation E-Mail</button>
                    <br><br><br>
                </form>
            </div>
            <!-- card content ends here -->
        </div>

    </div>
@endsection
