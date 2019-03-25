<style>
	/*Loader*/
	.sk-circle {
	  width: 40px;
	  height: 40px;
	  position: relative;
	  display: none;
	}
	.sk-circle .sk-child {
	  width: 100%;
	  height: 100%;
	  position: absolute;
	  left: 0;
	  top: 0;
	}
	.sk-circle .sk-child:before {
	  content: '';
	  display: block;
	  margin: 0 auto;
	  width: 15%;
	  height: 15%;
	  background-color: #333;
	  border-radius: 100%;
	  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
	          animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
	}
	.sk-circle .sk-circle2 {
	  -webkit-transform: rotate(30deg);
	      -ms-transform: rotate(30deg);
	          transform: rotate(30deg); }
	.sk-circle .sk-circle3 {
	  -webkit-transform: rotate(60deg);
	      -ms-transform: rotate(60deg);
	          transform: rotate(60deg); }
	.sk-circle .sk-circle4 {
	  -webkit-transform: rotate(90deg);
	      -ms-transform: rotate(90deg);
	          transform: rotate(90deg); }
	.sk-circle .sk-circle5 {
	  -webkit-transform: rotate(120deg);
	      -ms-transform: rotate(120deg);
	          transform: rotate(120deg); }
	.sk-circle .sk-circle6 {
	  -webkit-transform: rotate(150deg);
	      -ms-transform: rotate(150deg);
	          transform: rotate(150deg); }
	.sk-circle .sk-circle7 {
	  -webkit-transform: rotate(180deg);
	      -ms-transform: rotate(180deg);
	          transform: rotate(180deg); }
	.sk-circle .sk-circle8 {
	  -webkit-transform: rotate(210deg);
	      -ms-transform: rotate(210deg);
	          transform: rotate(210deg); }
	.sk-circle .sk-circle9 {
	  -webkit-transform: rotate(240deg);
	      -ms-transform: rotate(240deg);
	          transform: rotate(240deg); }
	.sk-circle .sk-circle10 {
	  -webkit-transform: rotate(270deg);
	      -ms-transform: rotate(270deg);
	          transform: rotate(270deg); }
	.sk-circle .sk-circle11 {
	  -webkit-transform: rotate(300deg);
	      -ms-transform: rotate(300deg);
	          transform: rotate(300deg); }
	.sk-circle .sk-circle12 {
	  -webkit-transform: rotate(330deg);
	      -ms-transform: rotate(330deg);
	          transform: rotate(330deg); }
	.sk-circle .sk-circle2:before {
	  -webkit-animation-delay: -1.1s;
	          animation-delay: -1.1s; }
	.sk-circle .sk-circle3:before {
	  -webkit-animation-delay: -1s;
	          animation-delay: -1s; }
	.sk-circle .sk-circle4:before {
	  -webkit-animation-delay: -0.9s;
	          animation-delay: -0.9s; }
	.sk-circle .sk-circle5:before {
	  -webkit-animation-delay: -0.8s;
	          animation-delay: -0.8s; }
	.sk-circle .sk-circle6:before {
	  -webkit-animation-delay: -0.7s;
	          animation-delay: -0.7s; }
	.sk-circle .sk-circle7:before {
	  -webkit-animation-delay: -0.6s;
	          animation-delay: -0.6s; }
	.sk-circle .sk-circle8:before {
	  -webkit-animation-delay: -0.5s;
	          animation-delay: -0.5s; }
	.sk-circle .sk-circle9:before {
	  -webkit-animation-delay: -0.4s;
	          animation-delay: -0.4s; }
	.sk-circle .sk-circle10:before {
	  -webkit-animation-delay: -0.3s;
	          animation-delay: -0.3s; }
	.sk-circle .sk-circle11:before {
	  -webkit-animation-delay: -0.2s;
	          animation-delay: -0.2s; }
	.sk-circle .sk-circle12:before {
	  -webkit-animation-delay: -0.1s;
	          animation-delay: -0.1s; }

	@-webkit-keyframes sk-circleBounceDelay {
	  0%, 80%, 100% {
	    -webkit-transform: scale(0);
	            transform: scale(0);
	  } 40% {
	    -webkit-transform: scale(1);
	            transform: scale(1);
	  }
	}

	@keyframes sk-circleBounceDelay {
	  0%, 80%, 100% {
	    -webkit-transform: scale(0);
	            transform: scale(0);
	  } 40% {
	    -webkit-transform: scale(1);
	            transform: scale(1);
	  }
	}
</style>
<script>
	jQuery(document).ready(function($) {
		jQuery('#shif-form').submit(function(){
			// jQuery('#shif-field-submit').prop('disabled',true);
			jQuery('#shif-field-submit').hide();
			jQuery('.sk-circle').show();
		});
	});
</script>
<form action="<?php echo get_template_directory(); ?>/shif/inc/shif-controller.php" method="POST" id="shif-form" class="Shif">
	<div class="Shif-inputContainer">
		<label for="shif-field-name">Nombre completo: </label>
		<input type="text" id="shif-field-name" name="shif-name" value="" required>
	</div>
	<div class="Shif-inputContainer">
		<label for="shif-field-email">Correo: </label>
		<input type="email" id="shif-field-email" name="shif-email" value="" required>
	</div>
	<div class="Shif-inputContainer">
		<label for="shif-field-tel">Teléfono: </label>
		<input type="tel" id="shif-field-tel" name="shif-phone" value="" required>
	</div>
	<div class="Shif-inputContainer">
		<label for="shif-field-city">Ciudad: </label>
		<input type="text" id="shif-field-city" name="shif-city" value="" required>
	</div>
	<div class="Shif-inputContainer">
		<label for="shif-field-desc">Si quieres, describe tu problema: </label>
		<textarea id="shif-field-desc" name="shif-desc" value="" cols="30" rows="10"></textarea>
	</div>

	<div class="Shif-inputContainer">
		<input type="hidden" name="base-url" value="<?php echo home_url(); ?>">
		<!-- <div class="g-recaptcha" data-sitekey="6LczsS4UAAAAAIsnmfMHwdCEDDPikEKkzQ4NIaZQ"></div> -->
		<input type="submit" id="shif-field-submit" name="shif-send" value="Enviar">
		<div class="sk-circle">
		  	<div class="sk-circle1 sk-child"></div>
		  	<div class="sk-circle2 sk-child"></div>
		  	<div class="sk-circle3 sk-child"></div>
		  	<div class="sk-circle4 sk-child"></div>
		  	<div class="sk-circle5 sk-child"></div>
		  	<div class="sk-circle6 sk-child"></div>
		  	<div class="sk-circle7 sk-child"></div>
		  	<div class="sk-circle8 sk-child"></div>
		  	<div class="sk-circle9 sk-child"></div>
		  	<div class="sk-circle10 sk-child"></div>
		  	<div class="sk-circle11 sk-child"></div>
		  	<div class="sk-circle12 sk-child"></div>
		</div>
	</div>
</form>


