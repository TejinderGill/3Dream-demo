<?php
    include('header.php');
?>

<div class="container">
	<!-- <div class="heading-conatct">
		<h2 class="contact">Contact Us</h2>
		<p>We welcome and value your feedback about our products and services.</p>
	</div> --><!--end heading-conatct-->

	<!-- address -->
	<div class="col-md-6">
		<div class="heading-conatct">
		<h2 class="contact">Contact Us</h2>
		<p>We welcome and value your feedback about our products and services.</p>
	</div><!--end heading-conatct-->
		<div class="col-sm-3">Address:</div>
			<div class="col-sm-8"> 
				<p>ViewIT Technologies<br/>
				#12 - 460 Brant St<br/> 
				Burlington, Ontario<br/> 
				Canada, L7R 4B6<br/>
				</p>
			</div>
		<div class="col-sm-3">Toll Free:</div>
			<div class="col-sm-8"> 
				<p>1-800-449-9984</p>
			</div>
		<div class="col-sm-3">Email:</div>
			<div class="col-sm-8"> 
				<p> <a class="mail" href="mailto:info@3dream.net">info@3dream.net</a>
				</p>
			</div>
		
	</div>
	<div class="col-md-6">
			<h2 class="contact">Feedback</h2>
			<form>
				<!-- <div class="col-md-12">
					<p>Feedback Type:</p><br/>
					  <span><input type="radio" class="radio" name="sex" value="suggestion" checked> <label> Suggestion </label></span>
					  <span><input type="radio" class="radio" name="sex" value="comment">Comment</span>
					  <div class="col-md-5"><input type="radio" class="radio" name="sex" value="question">Question</div>
				</div> -->
				<div class="col-md-6">
					<input type="text" placeholder="First Name" name="fname">
					<span class="highlight"></span>
			      	<span class="bar"></span>
				</div>
				<div class="col-md-6">
					<input type="text" placeholder="Email" name="email">
					<span class="highlight"></span>
			      	<span class="bar"></span>
				</div>
				<div class="col-md-6">
					<input type="text" placeholder="Last Name" name="lname">
					<span class="highlight"></span>
			      	<span class="bar"></span>
				</div>
				<div class="col-md-6">
					<input type="text" placeholder="Telephone" name="phone">
					<span class="highlight"></span>
			      	<span class="bar"></span>

				</div>
				<div class="col-md-12">
					<textarea placeholder="Comments" name="comments" ></textarea>
					<span class="highlight"></span>
				      <span class="bar"></span>
				</div>
				<div class="col-md-12">
					<button class="btn btn-default">Submit</button>
				</div>
			</form>
		
		
	</div>
	

</div><!--end conatiner-->


<?php
    include('footer.php');
?>