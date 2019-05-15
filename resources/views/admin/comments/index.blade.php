@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> All Customer Comments
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                        <a href="{{ route('voyager.customer.create') }}" style="margin-left: 82%; margin-top: 10px;background-color: #28E965;" type="button" class="btn btn-secondary">Create Comments</a>
                    <table class="table">
                        <caption>List of users</caption>

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">User image</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Comments</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customers as $key => $value) {
                                    ?>
                                <tr>
                                    <td></td>
                                    <td>{{$value->name}}</td>

                                    <td><img src="{{asset('thumbnail/'.$value->image)}}"></td>
                                    <td>{{$value->country}}</td>
                                    <td>{{$value->says}}</td>
                                    <td>
                                        <a href="{{ route('voyager.customer.edit', $value->id) }}" type="button" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('voyager.customer.destroy', $value->id) }}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                } ?>
                            </tbody>
                            <tbody>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop