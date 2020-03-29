@extends("frontend.master")
@section("title")
	{{ $title="Home" }}
@endsection
@section("maincontent")
		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>It's the food you love, delivered</h1>
						<div class="line">
							<h2> To Order Online</h2>
						</div>
					</div>
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form>
						  <ul class="navmain">
							<li><span>Location Name</span>
							 <input type="text" class="text" value="Secunderabad" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Secunderabad';}">
							</li>
							<li><span>Restaurant Name</span>
							 <input type="text" class="text" value="Swagath Grand" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Swagath Grand';}">
							</li>
							<li><span>Cuisine Name</span>
							 <input type="text" class="text" value="Chicken Biriyani" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Chicken Biriyani';}">
						    </li>
						  </ul>
						</form>
						</div>
						 <div class="main-search">
							<form action="https://p.w3layouts.com/demos/food_template/web/search.html">
							   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
								<input type="submit" value=""/>
							</form>
							<div class="close"><img src="images/cross.png" /></div>
						</div>
	    <div class="srch"><button></button></div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
					
				</div>
			</div>
		</div>
		<!-- header-section-ends -->
	<!---728x90--->

	<!-- content-section-starts -->
	<div class="content">
		<div class="special-offers-section">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>You prepare the food, we handle the rest</h3>
				</div>
				<div class="col-md-12 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						
						<div class="icon-data">
							<h4>List your restaurant on Extra Cash</h4>
							<p>Would you like thousands of new customers to taste your amazing food? So would we!
It's simple: we list your menu online, help you process orders, pick them up, and deliver them to hungry pandas - in a heartbeat!
Interested? Let's start our partnership today!</p>
						</div>
						<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="{{route('extra-cash')}}"><input type="submit" value="Get Start" style="background:#E34527"></a>
					</div>
						<div class="clearfix"></div>
				</div>
		</div>
		</div>
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Ordering food was never so easy</h3>
					<div class="dotted-line">
						<h4>Just 4 steps to follow </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose <span>Your Restaurant</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Order  <span>Your Cuisine</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Pay   <span> online / on delivery</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span>your food </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		@include('frontend.inc.special')
		<!---728x90--->

		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<!-- <div class="col-md-4 top-restaurents">
					<div class="top-restaurent-head">
						<h3>Top Restaurants</h3>
					</div>
					<div class="top-restaurent-grids">
						<div class="top-restaurent-logos">
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
								<img src="images/restaurent-1.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-2.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-3.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-4.jpg" class="img-responsive" alt="" />
							</div>
							<div class="res-img-1 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="{{asset('public/assets/frontend/images/restaurent-5.jpg')}}" class="img-responsive" alt="" />
							</div>
							<div class="res-img-2 nth-grid1 wow bounceIn" data-wow-delay="0.4s">
							    <img src="images/restaurent-6.jpg" class="img-responsive" alt="" />
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div> -->
				<div class="col-md-12 top-cuisines">
					<div class="top-cuisine-head">
						<h3>Find us in these cities and many more!</h3>
					</div>
					<div class="top-cuisine-grids">
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine1.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Momofuku Sydney</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine2.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Attica, Melbourne</label>
					    </div>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine3.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>regional Victoria</label>
					    </div>
						<div class="top-cuisine-grid nth-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine4.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Quay, Sydney</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine5.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Sepia, Sydney</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine6.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Vue de Monde</label>
					    </div>
						<div class="top-cuisine-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine7.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>The Bridge Room</label>
					    </div>
						<div class="top-cuisine-grid nth-grid nth-grid1 wow bounceIn" data-wow-delay="0.4s">
						    <a href="order.html"><img src="{{asset('public/assets/frontend/images/cuisine8.jpg')}}" class="img-responsive" alt="" /> </a>
							<label>Bennelong, Sydney</label>
					    </div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="service-section">
			<div class="service-section-top-row">
				<div class="container">
					<div class="service-section-top-row-grids wow bounceInLeft" data-wow-delay="0.4s">
					<div class="col-md-3 service-section-top-row-grid1">
						<h3>Download the food you love</h3>
					</div>
					
					<div class="col-md-5 service-section-top-row-grid3">
						<!--<img src="images/lunch.png" class="img-responsive" alt="" />-->
						<h4 style="color:#fff;margin-top:30px">It's all at your fingertips -- the restaurants you love. Find the right food to suit your mood, and make the first bite last. Go ahead, download us.</h4>
					</div>
					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="#"><input type="submit" value="App Store"></a>
					</div>
					<div class="col-md-2 service-section-top-row-grid4 wow swing animated" data-wow-delay= "0.4s">
						<a href="#"><input type="submit" value="Google Play" style="background:#E34527"></a>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="service-section-bottom-row">
				<div class="container">
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon1.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>100% Service Guarantee</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon2.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Fully Secure Payment</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 service-section-bottom-grid wow bounceIn "data-wow-delay="0.2s">
						<div class="icon">
							<img src="images/icon3.jpg" class="img-responsive" alt="" />
						</div>
						<div class="icon-data">
							<h4>Track Your Order</h4>
							<p>Lorem ipsum dolor sit amet, consect-etuer adipiscing elit. </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		@include('frontend.inc.footer_bottom')	
	</div>
@endsection