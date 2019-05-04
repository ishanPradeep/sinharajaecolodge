@extends('layouts.mail')
    
@section('mail')	

	<div class="courses">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					@if (isset($contact))
                		<?php  $split = explode(" ", $contact->title); ?>

						<h3>{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $contact->title)}} <span>{{$split[count($split)-1]}}</span> </h3>

						<p>{{$contact->description}}</p>
					@endif
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids agileits_mail_grids">
				<div class="col-md-6 agileinfo_mail_grid_left">
					<form method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="name" type="text" id="input-20" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-20">
								<span class="input__label-content input__label-content--nariko">Your Name</span>
							</label>
						</span>
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="email" type="email" id="input-21" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-21">
								<span class="input__label-content input__label-content--nariko">Your Email</span>
							</label>
						</span>
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="tel" type="Number" id="input-21" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-21">
							<span class="input__label-content input__label-content--nariko">Telephone Number</span>
							</label>
						</span>
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="subject" type="text" id="input-22" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-22">
								<span class="input__label-content input__label-content--nariko">Your Subject</span>
							</label>
						</span>
						<textarea name="message" placeholder="Your message here..." required=""></textarea>
						<input type="submit" value="Send">
					</form>
				</div>
				<div class="col-md-6 agileinfo_mail_grid_right">
					@if (isset($contact))
                		<img src="{{asset('storage/'.$contact->image) }}" alt=" " class="img-fluid" />
					@endif
					
				</div>
				<div class="clearfix"> </div>
			</div>
			{{-- <div class="clearfix"> </div> --}}
			<div style="margin-top: 7%; margin-left: 18%;">
				<h3>{{$contact->bank_deposit_title}}</h3>
			</div>
				<div style="margin-top: 3%">
					<div class="col-md-4">
						<p>{!! nl2br(e($contact->bank_deposit1)) !!}</p>
					</div>
					<div class="col-md-8">
						<p>{!! nl2br(e($contact->bank_deposit2)) !!}</p>
					</div>
				</div>
		</div>

	</div>
	<div class="agile_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.3905851087434!2d-34.90500565012194!3d-8.061582082752993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18d90992e4ab%3A0x8e83c4afabe39a3a!2sSport+Club+Do+Recife!5e0!3m2!1sen!2sin!4v1478684415917" style="border:0"></iframe>
	</div>
<!-- //mail -->
@endsection
