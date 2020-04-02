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
				<form action="{{route('save.restaurant')}}" method="post" validate="true" enctype="multipart/form-data" name="myforms">
					@csrf
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Restaurant Register Form</h3>
						<p>Interested? Fill in the form below to become our partner and 
increase your revenue!!!!!!!</p>
					</div>
				<div class="col-md-8 col-md-offset-3 order-form-grids">


					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
						<!--<h5>Order Information</h5>-->
					<span>Type of restaurant</span>
							<br>	
					<input type="radio" name="restaurant_type" value="1"> Commercial restaurant<br>
					<input type="radio"  name="restaurant_type"value="2">Home kitchen<br>
					@if ($errors->has('restaurant_type'))
                        <span class="error" style="color:red">{{ $errors->first('restaurant_type') }}</span>
                        <br>

                    @endif
                    <script type="text/javascript">
					   	$("#class_id").val({{ old('restaurant_type')}}).change();
					</script>
					<span>Restaurant or Home Kitchen Name</span>
					<input type="text" class="text" value="{{old('kitchen_name')}}"  name="kitchen_name" required>
					@if ($errors->has('kitchen_name'))
                        <span class="error" style="color:red">{{ $errors->first('kitchen_name') }}</span>
                    @endif
					<br>
		              <span>Restaurant or Home Kitchen  City </span>
					<input type="text" class="text" name="kitchen_city" required value="{{old('kitchen_city')}}">
					@if ($errors->has('kitchen_city'))
                        <span class="error" style="color:red">{{ $errors->first('kitchen_city') }}</span>
                    @endif
					<br>
					   <span>Restaurant or Home Kitchen Address </span>
					<input type="text" class="text" required name="kitchen_address" value="{{old('kitchen_address')}}">
					@if ($errors->has('kitchen_address'))
                        <span class="error" style="color:red">{{ $errors->first('kitchen_address') }}</span>
                    @endif
					<br>
					  <span>Postal Code of Restaurant or Home Kitchen </span>
					<input type="text" class="text" value="Postal Code" required name="postal_code" value="{{old('postal_code')}}">
						@if ($errors->has('postal_code'))
                        <span class="error" style="color:red">{{ $errors->first('postal_code') }}</span>
                    @endif
					<br>
					
					 
					 <span>First Name</span><br>
					<input type="text" class="text" placeholder="First Name"  name="firstName" value="{{old('firstName')}}">
					@if ($errors->has('firstName'))
                        <span class="error" style="color:red">{{ $errors->first('firstName') }}</span>
                    @endif
					<br>
					 <span>Last Name</span><br>
					<input type="text" class="text" placeholder="Last Name" required name="lastName" value="{{old('lastName')}}">
					@if ($errors->has('lastName'))
                        <span class="error" style="color:red">{{ $errors->first('lastName') }}</span>
                    @endif
					<br>

					<span>Contact Number</span><br>
					<input type="text" class="text" placeholder="+880" required name="phone_name" value="{{old('phone_name')}}">
					@if ($errors->has('phone_name'))
                        <span class="error" style="color:red">{{ $errors->first('phone_name') }}</span>
                    @endif
					<br>
					<span>Email</span><br>
					<input type="text" class="text" placeholder="Email" required="" name="email" value="{{old('email')}}">
					@if ($errors->has('email'))
                        <span class="error" style="color:red">{{ $errors->first('email') }}</span>
                    @endif
					<br>
					<span>Number of restaurants or home kitchens</span><br>
					<input type="text" class="text" required name="total_restuarent" value="{{old('total_restuarent')}}">
					@if ($errors->has('total_restuarent'))
                        <span class="error" style="color:red">{{ $errors->first('total_restuarent') }}</span>
                    @endif
					<br>
					<span>What is the average cost of a meal for one person </span><br>
					<input type="radio" name="average_cost" value="1">  $<br>
					<input type="radio"  name="average_cost"value="2">  $$<br>
					<input type="radio"  name="average_cost" value="3"> $$$<br>
					<input type="radio" name="average_cost" value="4">  $$$$<br>
					@if ($errors->has('average_cost'))
                        <span class="error" style="color:red">{{ $errors->first('average_cost') }}</span>
                    @endif

                     <script type="text/javascript">
					   	$("#class_id").val({{ old('average_cost')}}).change();
					</script>
					<span>Upload Menu</span><br>
					<input type="file" name="food_menu"><br>
					<span>Prices provided in the menu uploaded are not marked-up</span><br>
					@if ($errors->has('food_menu'))
                        <span class="error" style="color:red">{{ $errors->first('food_menu') }}</span>
                    @endif
					<input type="radio" value="1" name="agree" onclick="getAgree();"> I agree<br>
					<script type="text/javascript">
						function getAgree() {
							var selectedOption = $("input:radio[name=agree]:checked").val();
						if(selectedOption==1){
								$("#button").prop('disabled', false);
								document.getElementById("button").style.background = "#009900";
							}
						}
						 $(document).ready(function(){
						        /*$("button").click(function(){
						            location.reload(true);
						        });*/
						        $("#button").prop('disabled', true);
						       document.getElementById("button").style.background = "#ff0000";
						    });
						
					</script>
					<div class="wow swing animated" data-wow-delay= "0.4s">
					<input id="button" type="submit" value="Submit" style="padding:15px 30px;background:green;color:#fff;font-size:15px;border:none">
					</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		<!---728x90--->
@include('frontend.inc.special')
	</div>
@endsection