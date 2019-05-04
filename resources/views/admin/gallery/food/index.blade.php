@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> All Food
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                        <a href="{{ route('voyager.gallery-food.create') }}" style="margin-left: 82%; margin-top: 10px;background-color: #28E965;" type="button" class="btn btn-secondary">Create Food</a>
                    <table class="table">
                        <caption>List of Foods</caption>

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($events as $key => $value) {
                                    ?>
                                <tr>
                                    <td></td>
                                    <td><img width="150" src="{{asset('thumbnail/'.$value->image)}}"></td>
                                    <td>{{$value->description}}</td>
                                    <td>
                                        <a href="{{ route('voyager.gallery-food.edit', $value->id) }}" type="button" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('voyager.gallery-food.destroy', $value->id) }}" type="button" class="btn btn-danger">Delete</a>
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