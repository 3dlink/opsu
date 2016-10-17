<style>
p > a{
	color: black;
	text-decoration: underline;
}

#labelMovil2{
	padding-left: 20px !important;
}

#thx_content {
	width: 100%;
	  background-color: rgba(255, 178, 153, 0.6);
	background-image: url("../img/thx.png");
	background-size: 127% 174%;
	background-position-y: 34%;
	background-position-x: 53%;
}

#tenqiu {
	width: 100%;
	padding-right: 35px;
	padding-left: 35px;
	padding-bottom: 40px;
	padding-top: 228px;
	text-align: center;
}

#btn_save_obi {
	border-radius: 6px;
	height: 53px;
	font-size: 16px;
	font-weight: bold;
}

#dash_content #menu-content {
	*height: 100% !important;
}

#course-content {
  margin-left: 35px !important;
  }

#info_content {
	min-height: 0 !important;
}

#dash_content {
	height: 646px;
}
@media ( max-width : 750px) {
	.Footer {
	  width: 100% !important;
	}
	#menuUserDashboard2 {	
	  height: 45px;
	}

	#menuUserDashboard2 {
		margin-left: 10px;
	}

	#course-content {
  margin-left: 0 !important;
      margin-bottom: 60px;
  }
	#tenqiu {
		margin-bottom: 0 !important;
	}
	#dash_content {
		height: 0;
	}
	#thx_content {
		background-size: cover;
		width: 100%;
	background-position-y: 0%;
	background-position-x: 38%;
	}
	#info_content {
		padding-left: 0px;
		padding-right: 0px;
	}
}

@media ( max-width : 600px) {
	#tenqiu {
		margin-bottom: 0 !important;
	}
}

}

</style>
<div id="menuUserDashboard2">
	<div class="option"
		onclick="window.location.href='<?php echo $this->webroot;?>career_program/dashboard'"
		style="cursor: pointer;">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option  active">
		Mentoring
		<div></div>
	</div>
</div>

<div id="course-content">
	<div
		style="max-width: 1280px; display: block; margin: 0 auto; width: 100%;">
		<div id="thx_content">
			<div id="tenqiu" style="margin-bottom: 60px;">


				<h3 style="font-size: 36px; color: black; font-weight: 400;">Thank
					you for your interest in the Mentoring Program!</h3>

				<p style="font-size: 20px; font-weight: 400;">
					Your details have been sent to the mentor match team. We will be in touch within three working days. If you have any questions, please send us an email at <span ><a style="color:black; text-decoration:underline;" href="mailto:hello@joinmentor.co">hello@joinmentor.co</a></span>
				</p>
				<p style="font-size: 20px; font-weight: 400;">
					In the meantime, please ensure your  
					<a href="<?php echo $this->webroot.'career_program/mentoring_update';?>">profile information</a> is as up-to-date as possible so we can be sure to reach you.
				</p>


				<div class="take_up_btn"
					style="text-align: center; padding-top: 20px;">
					<button id="btn_save_obi" onclick="window.location.href='<?php echo $this->webroot.'career_program/mentoring_update';?>'" class="mentr-ok-btn-large" type="button">UPDATE INFO</button>
				</div>
			</div>
		</div>
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		var he = $('#info_content').height();
		$('#menu-content').css('height', he);
	})
</script>