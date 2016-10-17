<style>

.Footer{
  float: left;
  background-color: #333333;
  padding-top: 35px;
  padding-right: 50px;
  padding-left: 50px;
  padding-bottom: 45px;
  width: 100%;
}

.Footer > div{
	  *padding: 0px 30px 0px 30px;
}

.footer_chao{
    display: block;
 }
  .footer_hola{
    display: none;
 }
	
.Footer {
	padding: 35px 30px 45px 30px;
}

@media ( max-width : 1250px) {
	.Footer > div{
		padding: 0px;
		width: 100% !important;
	}
	#content-menu-div-principal, #legal-content{
		width: 100% !important;
	}
	#legal-content-imagenes {
  		float: left !important;
  	}
}

@media ( max-width : 750px) {
	.clearing{
		display: block !important;
	}

	.Footer{
		margin-left: 0px !important;
		width: 100%;
		padding: 35px 30px 45px 30px !important;
	}

	.Footer br{
		display: none;
	}

	.withBorder{
		width: 100% !important;
	}
	.secundario{
		float: none !important;
		padding-top: 30px !important;
		width: 100% !important;
	}

}

@media ( max-width : 950px) {	
	.Footer {
		padding: 35px 92px 45px 50px;
	}
}

</style>

<footer class="Footer">
	<div style="width:1170px; margin: 0 auto;">
		<div style="border-bottom: 2px solid #e4bec3; padding-bottom: 20px;">
			<img id="FiC" style="width: 140px; height: 25px;" src="<?php echo $this->webroot.'img/logo3.png';?>">
		</div>
		<div class="withBorder" style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div class="footer_hola">Mentor.</div>
			<div class="footer_chao"><a href="<?php echo $this->webroot;?>about-us">About MENTOR.</a></div>
			<div class="footer_chao">Become a mentor</div>
			<div><a href="<?php echo $this->webroot;?>contact-us">Feedback, Ideas & Help</a></div>
		</div>
		<div class="withBorder" style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright &copy; 2015 Joinmentor.co</div>
			<div>
				<a target="_blank" href="<?php echo $this->webroot;?>privacy-policy">Privacy Policy</a>
			</div>
			<div>
				<a target="_blank" href="<?php echo $this->webroot;?>terms-of-use">Terms of Use</a>
			</div>
		</div>
					<div class="clearing" style="display:none; clear:both"></div> 

		<div class="secundario" style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
        Follow us 
        		<a href="https://www.facebook.com/pages/Mentor-Careers/867059603387925" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Face.png'; ?>"></a>
        	<a href="https://plus.google.com/+Joinmentorcareers/posts" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Goo.png' ?>"></a>
        	<a href="https://www.linkedin.com/company/10023298" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Link.png'; ?>"></a>
        </div>
		<div class="secundario" style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">

			<div>
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="<?php echo $this->webroot;?>disclaimer">here</a>.
			</div>
		</div>
	</div>
</footer>