<?php echo $this->Html->css('premium');?>
<button style="display:none;" type="button" id="premium" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
  Launch demo modal
</button>
<div style="  background-color: rgba(0,0,0,0.7);" class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="height: 840px; width: 830px;  margin-top: 1vh;">
    <div class="modal-content modal-content-login" style="">
      <div class="modal-body modal-body2" style="background-color: #f2f2f2; padding-top: 20px;">
      	<button type="button" style="padding-left: 2px; line-height: 0.4; opacity: 1;  border: 2px solid black; border-radius: 20px; height: 30px; width: 30px; " class="close" data-dismiss="modal" aria-label="Close">
      		<span style=" font-size: 30px; font-weight: 300;" aria-hidden="true">&times;</span>
      	</button>
       	<div style="height: 155px; ">
       		<div class="titleHeader" style="">
       			Upgrade to <br /><b>MENTOR.</b> Premium
       		</div>
       		<div style="float: right;    font-size:34px; color:black;">
       			<img id="imagen1Premium" style="padding-right: 70px;  margin-top: 15px;" src="<?php echo $this->webroot;?>img/premium_img_1.png">
       		</div>
      	</div>
      	      </div>
      	<div style="clear: both;"></div>
      	
        <div class="sectionModalPremium" style="">
      		<div class="flor" style=" float:left;  padding-top: 70px; padding-left:30px;">
      			<img style="  width: 270px; "  src="<?php echo $this->webroot;?>img/premium_img_2.png">
      		</div>
      		<div id="title" style="  float: left; padding-top: 70px; font-size:24px; color:black;">
      			<div  style="  margin-left: 30px;">
      				<b>Find your profile match with 500+ careers</b>
      			</div>
      			
            <div id="comentIniesta" style=" padding-left:50px; margin-top: 45px;">
      				<div class="textComentIniesta" style="font-size:18px; width: 355px; float: left;">
      					<span style="font-style: italic;">The course has been great - before taking it, I was confused, no direction or actually too many directions. I would rate the course 5 out of 5</span> <span style="font-weight:500;">Sylvia Nelson</span> 
      				</div>
      				<div class="user_menu firstUser" style="">
					 </div>
      			</div>
      		</div>
      	</div>

      	<div style=" clear: both;"></div>

      	<div class="sectionModalPremium" style="">
      		<div class="secondTitle" style=" ">
      			<div  style=" font-size:24px; ">
      				<b>Understand Yourself and Your Needs Better</b>
      			</div>
      		</div>
      		<div class="flor" style=" float:right;  padding-top: 50px; padding-right:30px;">
      			<img style="  width: 270px; "  src="<?php echo $this->webroot;?>img/premium_img_3.png">
      		</div>
      	</div>
        <div style=" clear: both;"></div>

        <div class="divWith2coment" style=" padding-left:50px; margin-top:-100px;">
          <div class="user_menu secondUser" style="float:left; "></div>
          <div class="textComentIniesta textComentIniesta2" style="color:black; font-size:18px; width: 300px;   float: left;">
            <span style="font-style: italic;">Through the Mentor program I feel much more aware of how I would like to work in the future</span> <br/> <span style="font-weight:500;">Eric See</span>
          </div>
        </div>

      	<div style="clear: both;"></div>

      	<div class="plus" style="color:black; ">
      		PLUS, connect with professionals with vast experience in your field of interest and create your career vision through more unique guided exercises.
      	</div>
      	<div class="div-button" style="  text-align: center; margin-bottom:50px;  position: initial; margin-top:30px;">
			<button style="    width: 370px; font-size:18px; padding: 20px 50px 20px 50px;" onclick="window.location=WEBROOT+'Dashboards/intro_premium'" id="butlon" class="mentr-ok-btn-large2" type="button">Upgrade to <b>MENTOR.</b> Premium
			</button>
		</div>
    </div>
  </div>
</div>