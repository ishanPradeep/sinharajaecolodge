@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Update Package and Rate
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Package and Rate</h3>
                    </div>
                    <form action="{{ route('voyager.packages.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="panel-body">
                        <label class="awesome form-group col-md-12">Rates for Foreigners</label>

                        <label class="awesome form-group col-md-1"></label>
                        <label class="awesome form-group col-md-2">Single</label>
                        <label class="awesome form-group col-md-2">DBL</label>
                        <label class="awesome form-group col-md-3">TPL</label>
                        <label class="awesome form-group col-md-4">Description</label>

                        <div class="form-group col-md-1" data-aos="">
                            <label>B/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="b_b_single" required="" value="{{old('b_b_single', $package->b_b_single)}}" class="form-control">
                            <br>
                            {!! $errors->first('b_b_single', '<span class="error-block">:message</span">') !!}

                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="b_b_dbl" required="" value="{{old('b_b_single', $package->b_b_dbl)}}" class="form-control">
                            <br>
                            {!! $errors->first('b_b_dbl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-3" data-aos="">
                            <input type="text" name="b_b_tpl" required="" value="{{old('b_b_tpl', $package->b_b_tpl)}}" class="form-control">
                             <br>
                            {!! $errors->first('b_b_tpl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-4" data-aos="">
                            <textarea rows="4" cols="50" name="b_b_description" class="form-control">{{$package->b_b_description}}</textarea>
                             <br>
                            {!! $errors->first('b_b_description', '<span class="error-block">:message</span">') !!}

                        </div>
                   




                   <div class="form-group col-md-1" data-aos="">
                            <label>H/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="h_b_single" required="" value="{{old('h_b_single', $package->h_b_single)}}" class="form-control">
                            <br>
                            {!! $errors->first('h_b_single', '<span class="error-block">:message</span">') !!}

                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="h_b_dbl" required="" value="{{old('h_b_dbl', $package->h_b_dbl)}}" class="form-control">
                            <br>
                            {!! $errors->first('h_b_dbl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-3" data-aos="">
                            <input type="text" name="h_b_tpl" required="" value="{{old('h_b_tpl', $package->h_b_tpl)}}" class="form-control">
                             <br>
                            {!! $errors->first('h_b_tpl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-4" data-aos="">
                            <textarea rows="4" cols="50" name="h_b_description" class="form-control">{{$package->h_b_description}}</textarea>
                             <br>
                            {!! $errors->first('h_b_description', '<span class="error-block">:message</span">') !!}

                        </div>



                        <div class="form-group col-md-1" data-aos="">
                            <label>F/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="f_b_single" required="" value="{{old('f_b_single', $package->f_b_single)}}" class="form-control">
                            <br>
                            {!! $errors->first('f_b_single', '<span class="error-block">:message</span">') !!}

                        </div>
                        <div class="form-group col-md-2" data-aos="">
                            <input type="text" name="f_b_dbl" required="" value="{{old('f_b_dbl', $package->f_b_dbl)}}" class="form-control">
                            <br>
                            {!! $errors->first('f_b_dbl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-3" data-aos="">
                            <input type="text" name="f_b_tpl" required="" value="{{old('f_b_tpl', $package->f_b_tpl)}}" class="form-control">
                             <br>
                            {!! $errors->first('f_b_tpl', '<span class="error-block">:message</span">') !!}

                        </div>

                        <div class="form-group col-md-4" data-aos="">
                            <textarea rows="4" cols="50" name="f_b_description" class="form-control">{{$package->f_b_description}}</textarea>
                             <br>
                            {!! $errors->first('f_b_description', '<span class="error-block">:message</span">') !!}

                        </div>
                            




                        <label class="awesome form-group col-md-12">Packages ( night stay )</label>
                        <div class="form-group col-md-12" data-aos="">
                            <textarea rows="4" cols="50" name="packages_night_stay" class="form-control">{{$package->packages_night_stay}}</textarea>
                             <br>
                            {!! $errors->first('packages_night_stay', '<span class="error-block">:message</span">') !!}

                        </div>

                        <label class="awesome form-group col-md-12">Day Out Packages</label>
                        <div class="form-group col-md-12" data-aos="">
                            <textarea rows="4" cols="50" name="day_out_packages" class="form-control">{{$package->day_out_packages}}</textarea>
                             <br>
                            {!! $errors->first('day_out_packages', '<span class="error-block">:message</span">') !!}

                        </div>

                        <label class="awesome form-group col-md-12">Swimming Areas</label>
                        <div class="form-group col-md-12" data-aos="">
                            <textarea rows="4" cols="50" name="swimming_areas" class="form-control">{{$package->swimming_areas}}</textarea>
                             <br>
                            {!! $errors->first('swimming_areas', '<span class="error-block">:message</span">') !!}

                        </div>

                        <label class="awesome form-group col-md-12">Room Facilities</label>
                        <div class="form-group col-md-12" data-aos="">
                            <textarea rows="4" cols="50" name="room_facilities" class="form-control">{{$package->room_facilities}}</textarea>
                             <br>
                            {!! $errors->first('room_facilities', '<span class="error-block">:message</span">') !!}

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