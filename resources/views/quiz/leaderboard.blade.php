@extends('layouts.app')

@section('content')
    <div class="container">
        <?php
            function method1($a,$b){
                if ($a['round_id']>$b['round_id']){
                        return -1;
                }
                else if($a['round_id']==$b['round_id']){

                    if($a['updated_at']>$b['updated_at'])
                        return 1;
                    else 
                        return -1;
                }
                else{
                    return 1;
                }
            }
        usort($stand,"method1");
        ?>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default roundcls">
                    <div class=" phead"><h2>Leaderboard</h2></div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thread>
                                <tr class="danger">
                                    <th>#</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Current Round</th>
                                    <th>Solved At</th>
                                </tr>
                            </thread>
                            <tbody>
                            <?php
                            $p=0;
                            foreach($stand as $x) {?>
                                <tr>
                                    <th scope="row"><?php echo ($p+1)?></th>
                                    <td><?php echo $x['email'];?></td>
                                    <td><?php echo $x['username'];?></td>
                                    <td><?php echo $x['round_id'];?></td>
                                    <td><?php echo $x['updated_at'];?></td>
                                </tr>
                                <?php
                                $p++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

@stop