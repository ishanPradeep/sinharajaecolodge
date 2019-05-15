@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Add Our Agent
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create Our Agent </h3>
                    </div>
                    <form action="{{ route('voyager.our-agent.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div>

                    <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Name Of Agent</label>
                            <input type="text" name="name" required="" placeholder="Name" value="" class="form-control">
                            {!! $errors->first('name', '<span class="error-block">:message</span">') !!}
                        </div>
                      
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Face Book</label>
                            <input type="text" name="fb" required="" placeholder="Face Book" value="" class="form-control">
                            {!! $errors->first('fb', '<span class="error-block">:message</span">') !!}
                        </div>

                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Twitter</label>
                            <input type="text" name="twitter" required="" placeholder="Twitter" value="" class="form-control">
                            {!! $errors->first('twitter', '<span class="error-block">:message</span">') !!}
                        </div>

                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">G Plus</label>
                            <input type="text" name="g_plus" required="" placeholder="G Plus" value="" class="form-control">
                            {!! $errors->first('g_plus', '<span class="error-block">:message</span">') !!}
                        </div>
                      
                         <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Agent Image</label>
                            <input type="file" name="image" required="">
                            {!! $errors->first('image', '<span class="error-block">:message</span">') !!}
                        </div>

                       
                    </div>


                       
                    </div>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-primary">
                    </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop