
 @extends('master')
 @section('content')
        
 @if (Session::get('message'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{Session::get('message')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
     
 @endif
	<div class="main">

		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Register</h2>
            
						<form method="POST" action="/CreateAccount" class="register-form"
							id="register-form">
              @csrf
							<div class="form-group">
								<label for="name"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="name" id="name" placeholder="Your Name" />
							</div>
							<div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="email" id="email"
									 placeholder="Contact no" />
									
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label> <input
									type="password" name="password" id="password" placeholder="Password" />
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" onkeyup="check(this)" name="re_pass" id="re_pass"
									placeholder="Repeat your password" />
								
							</div>
							
							<div class="form-group">
								<input type="checkbox" name="agree-term" id="agree-term"
									class="agree-term" /> <label for="agree-term"
									class="label-agree-term"><span><span></span></span>I
									agree all statements in <a href="#" class="term-service">Terms
										of service</a></label>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup"
									class="form-submit" value="Register" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure>
							<img src="storage\logo\signin-image.jpg" rel="icon" alt="sing up image">
						</figure>
						<a href="Login" class="signup-image-link">I am already
							member</a>
					</div>
				</div>
			</div>
		</section>


	</div>
	<!-- JS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" href="alert/dist/sweetalert.css">
	<script type="text/javascript">
	
	  var obj=document.getElementById("message").value;
	  if(obj=="success"){
	 	 swal("Congratualation","Your Account Created","success");
	 }
	 
	 
	 var password=document.getElementById('password');
	  function check(ele){
	        if(ele.value.length>0){
	            if(ele.value != password.value){
	            	document.getElementById('res').style.color="red";
	              document.getElementById('res').innerText="password does't mach";
	            }else{
	                document.getElementById('res').innerText="";

	            }
	        }else{
	            document.getElementById('res').innerText="Enter confirm password";

	        }
	    }
	 
	  function test(ele){

	        if(isNaN(ele.value)){
	         // document.getElementById('result').style.color="red";
	           //document.getElementById('result').innerText="Enter Only Number";
	           alert("Enter Only Number");
	        }
	        else
	        {
	            document.getElementById('result').innerText="";

	            if(ele.value.length >10){
	               // document.getElementById('result').innerText="mobile number only will be 10 digit ";
                alert("mobile number only will be 10 digit");
	            }
	            
	        }
	          
	    }
	 

	</script>
  @endsection
