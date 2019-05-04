@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> New Camping
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Camping</h3>
                    </div>    
                    <form action="{{ route('voyager.gallery-camping.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Description</label>
                             <textarea rows="4" cols="50" required="" name="description" class="form-control"></textarea>
                            {!! $errors->first('description', '<span class="error-block">:message</span">') !!}
                        </div>
                         <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Image</label>
                            <input type="file" name="image" required="">
                            {!! $errors->first('image', '<span class="error-block">:message</span">') !!}
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