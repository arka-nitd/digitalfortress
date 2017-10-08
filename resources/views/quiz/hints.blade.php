@extends('layouts.app')

@section('content')
   <div class="col-md-10 col-md-offset-1">
        <div class="card">
            <div class="card-header" data-background-color="red">
                <h4 class="title text-center">Hints</h4>
            </div>
            <div class="card-content">   
                    <table class="table" id="myTable">
                        <thead class="text-primary">
                                <th>#</th>
                                <th>Title</th>
                                <th>Content</th>
                        </thead>
                        <tbody>
                        @foreach ($hints as $key=>$value)
                                <tr class="cent">
                                    <td>{{ $key+1 }}</td>
                                    <td width="30%">{{ $value['title'] }}</td>
                                    <td>{{ $value['content'] }}</td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@stop
