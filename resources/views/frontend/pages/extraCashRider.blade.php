	@extends("frontend.master")
@section("title")
		{{$title="Sign Up"}}
@endsection
@section("maincontent")
	<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Network of over 5000 Restaurants</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>

							<div class="container">
								<div class="col-md-offset-4 col-md-6 order-form-grids">

									<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
										<span style="color: white">Type of Order</span>
										<div class="dropdown-button">
											<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
												<option value="0">Pick up</option>
												<option value="1">Delivery</option>
												<option value="2">Catering</option>
											</select>
										</div>
										<span style="color: white">Restaurant Location</span>
										<div class="dropdown-button wow">
											<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
												<option value="0">Restaurent A,144 East MG Road Indore</option>
												<option value="1">Restaurent B,64 Paarli Hills IndoreIndore</option>
											</select>
										</div>
										<div class="wow swing animated" data-wow-delay= "0.4s">
											<input type="button" value="Apply Now">
										</div>
									</div>
								</div>
							</div>

						<!---728x90--->

					</div>
<!--					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">-->
<!--						<form>-->
<!--							<div class="col-md-offset-4 col-md-6 order-form-grids">-->

<!--								<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">-->
<!--									<span>Type of Order</span>-->
<!--									<div class="dropdown-button">-->
<!--										<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>-->
<!--											<option value="0">Pick up</option>-->
<!--											<option value="1">Delivery</option>-->
<!--											<option value="2">Catering</option>-->
<!--										</select>-->
<!--									</div>-->
<!--									<span>Restaurant Location</span>-->
<!--									<div class="dropdown-button wow">-->
<!--										<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>-->
<!--											<option value="0">Restaurent A,144 East MG Road Indore</option>-->
<!--											<option value="1">Restaurent B,64 Paarli Hills IndoreIndore</option>-->
<!--										</select>-->
<!--									</div>-->
<!--									<div class="wow swing animated" data-wow-delay= "0.4s">-->
<!--										<input type="button" value="Apply Now">-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</form>-->
<!--						</div>-->

				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!---728x90--->

	<!-- content-section-starts -->

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
@endsection