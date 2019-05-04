@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> All Agents
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                    <a href="{{ route('voyager.our-agent.create') }}" style="margin-left: 82%; margin-top: 10px;background-color: #28E965;" type="button" class="btn btn-secondary">Create Agents</a>
                    
                    <table class="table">
                        <caption>List of Agents</caption>

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Face Book Link</th>
                                    <th>Twitter Link</th>
                                    <th>G_Plus Link</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($agents as $key => $value) {
                                    ?>
                                <tr>
                                    <td></td>
                                    <td><img width="150" src="{{asset('thumbnail/'.$value->image)}}"></td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->fb}}</td>
                                    <td>{{$value->twitter}}</td>
                                    <td>{{$value->g_plus}}</td>
                                    <td>
                                        <a href="{{ route('voyager.our-agent.edit', $value->id) }}" type="button" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('voyager.our-agent.destroy', $value->id) }}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop