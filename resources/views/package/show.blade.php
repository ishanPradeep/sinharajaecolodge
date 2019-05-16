@extends('layouts.mail')
    
@section('mail')	

	<div class="courses">
		<div class="container">
				



                    <div class="panel-body">
						 <h3 class="tittle mb-xl-5 mb-4 text-dark text-center">
                        <span class="text-uppercase">Rates</span>For Foreigners</h3><br>

                        <label class="awesome form-group col-md-1"></label>
                        <label class="awesome form-group col-md-2">Single</label>
                        <label class="awesome form-group col-md-2">DBL</label>
                        <label class="awesome form-group col-md-3">TPL</label>
                        <label class="awesome form-group col-md-4">Description</label>
                        <div class="form-group col-md-1" data-aos="">
                            <label>B/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	  <label class="w3-input" style="font: -webkit-mini-control">{{$package->b_b_single}}</label>
                            <br>

                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->b_b_dbl}}</label>
                            <br>

                        </div>

                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->b_b_tpl}}</label>
                            <br>

                        </div>

                        <div class="form-group col-md-5" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->b_b_description}}</label>
                            <br>
                        </div>
                   




                   <div class="form-group col-md-1" data-aos="">
                            <label>H/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->h_b_single}}</label>
                            <br>

                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->h_b_dbl}}</label>
                            <br>

                        </div>

                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->h_b_tpl}}</label>
                             <br>

                        </div>

                        <div class="form-group col-md-5" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->h_b_description}}</label>
                             <br>

                        </div>



                        <div class="form-group col-md-1" data-aos="">
                            <label>F/B</label>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->f_b_single}}</label>
                            <br>
                        </div>
                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->f_b_dbl}}</label>
                            <br>

                        </div>

                        <div class="form-group col-md-2" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->f_b_tpl}}</label>
                             <br>
                        </div>

                        <div class="form-group col-md-5" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->f_b_description}}</label>
                             <br><br><br><br>
                        </div>
                            




                        <label class="awesome form-group col-md-12">Packages ( night stay )</label>
                        <div class="form-group col-md-12" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->packages_night_stay}}</label>
                             <br><br><br>

                        </div>

                        <label class="awesome form-group col-md-12">Day Out Packages</label>
                        <div class="form-group col-md-12" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->day_out_packages}}</label>
                             <br><br><br>

                        </div>

                        <label class="awesome form-group col-md-12">Swimming Areas</label>
                        <div class="form-group col-md-12" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->swimming_areas}}</label>
                             <br><br><br>

                        </div>

                        <label class="awesome form-group col-md-12">Room Facilities</label>
                        <div class="form-group col-md-12" data-aos="">
                        	<label class="w3-input"  style="font: -webkit-mini-control">{{$package->swimming_areas}}</label>
                             <br><br><br>

                        </div>
                           
                    </div>
                    

		</div>

	</div>


	
<!-- //mail -->
@endsection
