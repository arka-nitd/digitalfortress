@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-sm-6 leftbar">
            
                <div class="panel-heading"><h3 class='mainfont'>THE DIGITAL FORTRESS</h3></div>

                <div class="panel-body">
                    <?php if (session()->has('name')){
                    ?>
                        <a class="col-md-4 btn btn-lg btn-primary" href='start'><i class="fa fa-hourglass-start"></i> Click to Start</a>
                    <?php
                    } else {
                        ?>
                        <p class="text-center">
                            <a class="col-md-4 btn btn-lg btn-primary" href='login/fb'><i class="fa fa-facebook"></i> Login with Facebook</a>
                        </p>
                    <?php } ?>
                </div>
            
        </div>
    </div>
</div>
@endsection
