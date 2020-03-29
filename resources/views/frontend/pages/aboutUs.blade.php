	@extends("frontend.master")
@section("title")
		{{$title="Sign Up"}}
@endsection
@section("maincontent")
	<div class="contact-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>About</h3>
				<p>Home/About</p>
			</div>
		</div>
		<!---728x90--->

		<div class="contact_top">
			 		<div class="container">
			 			<div class="col-md-6 contact_left wow fadeInRight" data-wow-delay="0.4s">
			 				<h4>About Us</h4>
			 				<p>Lorem ipsum dolor sit amet, adipiscing elit.Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere. Donec tincidunt dolor et tristique bibendum. Aenean sollicitudin vitae dolor ut posuere.</p>

					        </div>
					        <div class="col-md-6 company-right wow fadeInLeft" data-wow-delay="0.4s">
								<div>
									<img src="{{asset('public/assets/frontend/images/order.jpg')}}" class="img-responsive" alt="" />
								</div>



							 </div>
						</div>
					</div>
		@include('frontend.inc.footer_bottom')

	</div>
@endsection