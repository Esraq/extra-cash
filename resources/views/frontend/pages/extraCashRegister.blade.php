	@extends("frontend.master")
@section("title")
		{{$title="Sign Up"}}
@endsection
@section("maincontent")
	<div class="order-section-page">
		<div class="contact-head">
		    <div class="container">
				<h3>Order Information</h3>
				<p>Home/Order Information</p>
			</div>
		</div>
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Steps for activation</h3>
					<div class="dotted-line">
						<h4>Just 8 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s">
							<br><br><br>
							<i class="fa fa-user text-center" style="font-size:65px;text-align:center;color:#ddd;margin-left:8px"></i>
							<p>Sign <span> up online</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-check-square text-center" style="font-size:65px;text-align:center;color:#ddd;margin-left:8px"></i>
							<p>Approval  <span> stage</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-envelope text-center" style="font-size:65px;text-align:center;color:#ddd;"></i>
							<p>Extra Cash   <span>sends contract</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-file text-center" style="font-size:65px;text-align:center;color:#ddd"></i>
							<p>Contract <span> signed</span></p>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-file text-center" style="font-size:65px;text-align:center;color:#ddd;margin-left:15px"></i>
							<p>Receive<span>

of your menu</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-tablet text-center" style="font-size:65px;text-align:center;color:#ddd;margin-left:8px"></i>
							<p>Receive<span>

Extra Cash devices</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-phone text-center" style="font-size:65px;text-align:center;color:#ddd;"></i>
							<p>Receive<span>

training via call</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<br><br><br>
							<i class="fa fa-thumbs-up text-center" style="font-size:65px;text-align:center;color:#ddd"></i>
							<p style="font-size:15px">Restaurant<span>

is live on extra cash</span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Restaurant Register Form</h3>
						<p>Interested? Fill in the form below to become our partner and 
increase your revenue!!!!!!!</p>
					</div>
				<div class="col-md-8 col-md-offset-3 order-form-grids">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<!--<h5>Order Information</h5>-->
								<span>Type of restaurant</span>
								 <div class="dropdown-button">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
						<option value="1">Commercial restaurant</option>
						<option value="2">Home kitchen</option>
					  </select>
					</div>
					<span>Restaurant or Home Kitchen Name</span>
					<input type="text" class="text" value="Restaurant or Home Kitchen Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Restaurant or Home Kitchen Name';}"><br>
		              <span>Restaurant or Home Kitchen  City </span>
					<input type="text" class="text" value="Restaurant or Home Kitchen  City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Restaurant or Home Kitchen  City ';}"><br>
					   <span>Restaurant or Home Kitchen Address </span>
					<input type="text" class="text" value="Restaurant or Home Kitchen Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Restaurant or Home Kitchen Address';}"><br>
					  <span>Postal Code of Restaurant or Home Kitchen </span>
					<input type="text" class="text" value="Postal Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Time';}"><br>
					 <span>Cuisine </span>
					   <div class="dropdown-button wow">           			
            			<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
            			<option value="1">Restaurent A,144 East MG Road Indore</option>	
						<option value="2">Restaurent B,64 Paarli Hills IndoreIndore</option>
					  </select> 
					</div>
					 
					 <span>First Name</span><br>
					<input type="text" class="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"><br>
					 <span>Last Name</span><br>
					<input type="text" class="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"><br>

					<span>Contact Number</span><br>
					<input type="text" class="text" value="+880" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"><br>
					<span>Email</span><br>
					<input type="text" class="text" value="Email " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"><br>
					<span>Number of restaurants or home kitchens</span><br>
					<input type="text" class="text" value="Number of restaurants or home kitchens" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Number of restaurants or home kitchens';}"><br>
					<span>What is the average cost of a meal for one person </span><br>
					<input type="radio" name="av_amount" value="1">  $<br>
					<input type="radio"  name="av_amount"value="2">  $$<br>
					<input type="radio"  name="av_amount" value="3"> $$$<br>
					<input type="radio" name="av_amount" value="4">  $$$$<br>
					<span>Upload Menu</span><br>
					<input type="file" name="file"><br>
					<span>Prices provided in the menu uploaded are not marked-up</span><br>
					<input type="radio" name="file"> I agree<br>
					<div class="wow swing animated" data-wow-delay= "0.4s">
					<input type="button" value="order now">
					</div>
					</div>
				</div>
				
			</div>
		</div>
		<!---728x90--->

@include('frontend.inc.special')
	</div>
@endsection