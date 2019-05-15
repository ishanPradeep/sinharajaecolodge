@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> New Customer Says
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Customer Says</h3>
                    </div>
                    <form action="{{ route('voyager.customers.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">name</label>
                            <input type="text" name="name" required="" placeholder="Name" value="" class="form-control">
                            {!! $errors->first('name', '<span class="error-block">:message</span">') !!}
                        </div>
                      
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Country</label>
                            <input type="text" name="country" required="" placeholder="Country" value="" class="form-control">
                            {!! $errors->first('country', '<span class="error-block">:message</span">') !!}
                        </div>
                       
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Says</label>
                             <textarea rows="4" cols="50" required="" name="says" class="form-control"></textarea>
                            {!! $errors->first('says', '<span class="error-block">:message</span">') !!}
                        </div>
                         <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Customer Image</label>
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