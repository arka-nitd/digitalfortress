@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default roundcls">
                    <div class="phead "><h2>Question no {{ $qid }}</h2></div>
                    <div class="panel-body">
                        <h4 style=" line-height:1.9;"><pre><?php  print_r($ques); ?></pre></h4>
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/check/'.$qid) }}">
                            {!! csrf_field() !!}
                            <input type="text" class="col-md-3 input-lg" name="ansq">
                            <input type="submit" class="col-md-3 col-md-offset-1 input-lg" name="ansqsubmit" value="Check">
                            <?php if($error!='') echo "<p class='error col-md-3 col-md-offset-1'>$error</p>"?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@stop