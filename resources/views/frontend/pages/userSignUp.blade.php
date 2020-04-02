@extends("frontend.master")
@section("title")
		{{$title="Sign Up"}}
@endsection
@section("maincontent")
<script type="text/javascript">
	 Toast.fire({
          icon: 'success',
          title: '<span style="width:350px;padding:10px;color:#fff">subscribe successfull..</span>'
    });
</script>
<div class="content">
	<div class="contact-head">
		    <div class="container">
				<h3>User Register</h3>
				<p>Home/User Register</p>
			</div>
		</div>
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	  <form action="{{route('save.customer')}}" method="post" validate="true"> 
		  	  	@csrf
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Name<label>*</label></span>
						<input type="text" name="customer_name" required="" value="{{ old('customer_name')}}"> 
						@if ($errors->has('customer_name'))
                            <span class="error" style="color:red">{{ $errors->first('customer_name') }}</span>
                        @endif
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Email Address<label>*</label></span>
						<input type="text" name="email" required="" value="{{ old('email')}}"> 
						@if ($errors->has('email'))
                            <span class="error" style="color:red">{{ $errors->first('email') }}</span>
                        @endif
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Phone<label>*</label></span>
						 <input type="text" name="phone" required="" value="{{ old('phone')}}"> 
						 @if ($errors->has('phone'))
                            <span class="error" style="color:red">{{ $errors->first('phone') }}</span>
                        @endif
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Address<label>*</label></span>
						 <input type="text" name="address" required="" value="{{ old('address')}}"> 
						 @if ($errors->has('address'))
                            <span class="error" style="color:red">{{ $errors->first('address') }}</span>
                        @endif
					 </div>
					 <div class="clearfix"> </div>
					   <!-- <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a> -->
					 </div>
				     <div class="register-bottom-grid">
						    <h3 align="left">LOGIN INFORMATION</h3>
							 <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input type="password" name="password" id="password" required="">
								@if ($errors->has('password'))
		                            <span class="error" style="color:red">{{ $errors->first('password') }}</span>
		                        @endif
							 </div>
							 <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="conpassword" required="">

							 </div>
					 </div>
				
				<div class="clearfix"> </div>
				<div class="register-but">

					   <input type="submit" value="Submit" style="padding:15px 30px;background:green;color:#fff;font-size:15px;border:none" >
					   <div class="clearfix"> </div>
		
				</div>
				</form>
		   </div>
	     </div>
	    </div>
		<!---728x90--->

@include('frontend.inc.special')
		<!---728x90--->
			@include('frontend.inc.footer_bottom')
	</div>
@endsection