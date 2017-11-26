@extends('layouts.master')
@section('content')
<body class="index-4">
<section id="content">
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_5">
					<form id="contact-form" method="POST" action="/submitRequest">
							<header>
								<h2><span>Enter Details:</span></h2>
							</header>
							<fieldset>
									<label class="name">
										<span class="text">Your Name:</span>
										<input type="text" name="name" placeholder="" value="" />
									</label>
									<label class="email">
										<span class="text">Your E-mail:</span>
										<input type="text" name="email" placeholder="" value="" />
									</label>
									<label class="contact">
										<span class="text">Contact Number:</span>
										<input type="text" name="contact" placeholder="" value="" />
									</label>
								<div class="cont_btn">
									<a href="#" data-type="reset" class="btn">Clear</a>
									<input id="submitButton" type="submit" class="btn"></input>
								</div>
						</fieldset>
					</form>
				</div>
				<div class="grid_6 preffix_1">
					<div>
						<header>
							<h2><span>Service Details</span></h2>
						</header>
						<p class="el-1">
							Hi there! Please enter your contact details and submit your request.<br> 
                            Our representative will get in touch with you.Thank you!
						</p>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
<script type="text/javascript">
$( "form" ).submit(function( event ) {
     $('body').addClass('shell loading');
    return;
  });
 </script>
@endsection