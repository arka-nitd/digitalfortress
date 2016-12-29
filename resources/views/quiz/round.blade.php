@extends('layouts.app')

@section('content')

<div class="container">

    <div class ="rowback">
        <div class="row">
            <h3 class="heading">Round <?php echo $id.' : '.$rname ?>}}</h3>
                    <div class="col-md-6 "> 
                        <div class="panel panel-default">
                            <table class="table table-bordered">
                                <thread>
                                    <tr class="info">
                                        <th>QUESTION LIST</th>
                                        <th>POSITION LIST</th>
                                    </tr>
                                </thread>
                                <tbody>
                                <?php
                                $no = count($totalques);
                                for($i=0;$i<$no;$i++){
                                ?>
                                     <tr class="<?php if(in_array($totalques[$i],$qdone)) echo "success"; else echo "danger";?>">
                                        <td><a href="<?php echo $id.'/'.$totalques[$i]; ?>">Question {{$totalques[$i]}}<?php if(in_array($totalques[$i],$qdone)) echo " (Solved)" ?></a></td>
                                        <td><?php if(in_array($totalpos[$i],$pos)) { echo $totalpos[$i]; } else echo "LOCKED"?></td>
                                     </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="map" class="col-md-6" style="border: double white 7px;"></div>
                        <script>
                            $(document).ready(function(){
                            path= <?php echo json_encode($locations); ?>;
                              map = new GMaps({
                                div: '#map',
                            
                              });
                            polygon = map.drawPolygon({
                              paths: path, // pre-defined polygon shape
                              strokeColor: 'orange',
                              strokeOpacity: 1,
                              strokeWeight: 3,
                              fillColor: 'green',
                              fillOpacity: 0.4
                            })
                              bounds = [];
                             for (var i in path) {
                              var latlng = new google.maps.LatLng(path[i][0], path[i][1]);
                              bounds.push(latlng);
                              map.addMarker({
                                lat: path[i][0],
                                lng: path[i][1]
                              });
                            }
                            map.fitLatLngBounds(bounds);
                            });
                        </script>
                    </div>
                
        <div class="row">
        
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default roundcls">
                    
                        <div class="panel-body">
                            <div class=" col-md-8 " >
                                <h4 style=" font-family:'Comic MS Sans'; ">{{ $rq }}</h4>
                            </div>
                            <form class="form-horizontal" role="form" method="POST" action="<?php redirect(url('/round/'.($id))); ?>">
                                {!! csrf_field() !!}
                                <input type="text" class="col-md-2 " name="ansr">
                                <input type="submit" class="col-md-2" name="ansrsubmit" value="Check">
                            </form>
                        </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
<div class="row foot">
    <div class="col-md-3 fleft">No of Users who crossed this Round : <?php echo $c; ?></div>
        </div>
</div>
@stop