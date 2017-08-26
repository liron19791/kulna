<?php

/*
Template Name: connect area
*/

?>


<?php get_header(); ?>


<!-- התחברות לאזור האישי -->

<div class="contact-us">
	<div class="row">
			<div class="video-background">
	    		<div class="video-foreground">
	     			 <iframe src="https://www.youtube.com/embed/2irkrkgylvE?controls=0&showinfo=0&rel=0&autoplay=1&mute &loop=1&playlist=2irkrkgylvE" frameborder="0" allowfullscreen></iframe>
	    		</div>
	  		</div>

		<div id="vidtop-content">
			<div class="vid-info">

				<form method="POST" name="login">
					<div id="formstyle" class="myform ">
						<h2>התחברות לאתר</h2>
						<div class="input-group">
				  
				  			<input type="text" name="userid" class="form-control" placeholder="שם משתמש" aria-describedby="basic-addon1">
						</div>

						<div class="input-group">
				  
				  			<input type="password" name="pswrd" class="form-control" placeholder="סיסמא" aria-describedby="basic-addon1">
						</div>
	  
						<span id='message'></span>
						<p class="lead">
							<input class="btn btn-primary btn-lg" type="button" onclick="check(this.form)" value="התחבר">
				 		</p>
			 	</form>
		 	</div>
		</div>
	</div>
</div> 

<div class="height"></div>


<?php get_footer(); ?>

<script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.userid.value == "student" && form.pswrd.value == "student") {
                    window.open('http://www.kulna.org.il/%d7%90%d7%99%d7%96%d7%95%d7%a8-%d7%90%d7%99%d7%a9%d7%99/')/*opens the target page while Id & password matches*/
                }
                else {
                    alert("סיסמא או שם משמש שגויים")/*displays error message*/
                }
            }
        </script>