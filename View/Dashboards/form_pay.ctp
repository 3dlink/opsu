<?php echo $this->Html->css('form_to_pay'); ?>
<?php //echo "foobarbazblargblurg" | sed 's/.\{4\}/& /g' ?>
<div id="pixel">

</div>
<div id="dash_content_2">
<div id="form">
	<div style="" >
		<div class="titleFi">
			Your payment information
		</div>
		<div id="message-succes" class="sucss">
			<img src="<?php echo $this->webroot;?>img/Check.png" style=""
				id="message-succes-imagen">
			<div style="" id="message-succes-texto">
				<h3><b>Thank you. Your payment has been successfully processed.</b> You can now fully access <b>MENTOR</b>'s Career Decision-Making Program.</h3>
			</div>
		</div>
		<div id="message-succes" class="error">
			<img src="<?php echo $this->webroot;?>img/equis.png" style=""
				id="message-succes-imagen">
			<div style="" id="message-succes-texto">
				<h3><b>There was a problem processing your payment.</b> </br> Please try again using a different card.</h3>
			</div>
		</div>
		<div class="conteL">
			<div id="cardName">
				<input id="Cardname" class="input_form" placeholder="Card name">
				<div style="float:right;margin-top:12px;">
					<span><img style="margin: -10px 10px 0px 10px;" src="<?php echo $this->webroot;?>img/visa.png"></span>
					<span><img style="margin-top:-10px;" src="<?php echo $this->webroot;?>img/mastercard.png"></span>
				</div>
			</div>
			<div style="margin-top:25px;">
				<input maxlength="19" id="Cardnumber" class="input_form" placeholder="Card number">
			</div>
		</div>
		<div class="conteL">
			<div class="diiv">
				Security code 
				<span class="sec">
					<input id="Cardcode" maxlength="4" style="#f7f7f7; border:1px solid #cccccc; width:65px; height:40px; background-color: #f7f7f7;font-size:20px;">
				</span> 
				<span class="what"> 
					<a class="tooltips" style="text-decoration:underline; color: #ff6633;">
						What’s this?
						<span style="top:30px;" class="tooTi">
							A three-digit number on the back of your credit card, immediately following your main card number.
						</span>
					</a>
				</span>
			</div>
			<div class="diiv">
				Expiration date
				<span class="exp">
					<select id="Cardday" style="#f7f7f7; border:1px solid #cccccc;height:40px; background-color: #f7f7f7;font-size:20px;">
						<?php 
							for($x = 1; $x <= 12; $x ++){
								echo '<option>'.$x.'</option>';
							}
						?>
					</select>
				</span> 
				<span class="exp"> 
						<select id="Cardyear" style="#f7f7f7; border:1px solid #cccccc; height:40px; background-color: #f7f7f7;font-size:20px;">
						<?php 
							for($x = 2015; $x <= 2025; $x ++){
								echo '<option>'.$x.'</option>';
							}
						?>
					</select>
					<!-- <input id="Cardyear" style="#f7f7f7; border:1px solid #cccccc; width:105px; height:40px; background-color: #f7f7f7;"> -->
				</span>
			</div>
		</div>
		<div class="conteL" style="margin-top:40px;">
			<button style="padding: 8px 20px; width: 170px; border-radius: 8px; font-size:24px;" class="submitPay mentr-ok-btn-large2" type="button">SUBMIT</button>
		</div>
		<div class="conteL info">
			By clicking SUBMIT you agree with the <a target="_blank" href="<?php echo $this->webroot;?>terms-of-use" style="text-decoration:underline; color: #ff6633;">Terms of Use</a>
			and <a target="_blank" href="<?php echo $this->webroot;?>privacy-policy" style="text-decoration:underline; color: #ff6633;">Privacy Policy</a>
		</div>
	</div>
		<button id="nextQ" onclick="window.location=WEBROOT+'career_program/quests_module_1'" style="display:none; padding: 8px 20px; width: 270px; border-radius: 8px; font-size:24px;" class="submitPay mentr-ok-btn-large2" type="button">START NEXT QUEST</button>
</div>

<div id="derecha">
	<div class="conteL"  style="font-weight: bold; padding: 20px 0px 20px 0px; display: inline-block;">
		Your selection
	</div>
	<div class="conteR"  style="display:none; font-weight: bold; padding: 20px 0px 20px 0px;">
		Your new access
	</div>
	
	<div style="box-shadow: 0 0 5px 1px rgba(0,0,0,0.16);border:solid 1px #d0d0d0;">
		<?php if ($option == 1){ ?>

			<div style=" padding-top: 5px; font-size:30px; height:60px; text-align:center; width:100%; background-color:#f0f0f0;">
				<span style="  vertical-align: middle;"> 1 <B> WEEK </B> ACCESS </span>
			</div>
			<div class="caja_content">
				<div class="letras_caja">
					One-time fee
				</div>
			</div>

		<?php } ?>

		<?php  if ($option == 2){ ?>

			<div style="font-weight:500; padding-top: 5px; font-size:30px; height:60px; text-align:center; width:100%; background-color:#f0f0f0;">
				<span style="  vertical-align: middle;"> 1 <B> MONTH </B> ACCESS </span>
			</div>
			<div class="caja_content">
				<div class="letras_caja">
					One-time fee
				</div>
				<div class="letras_caja">
					*5-Day Money Back Guarantee
				</div>
				<div class="letras_abajo">
					Allows time to connect with mentors
				</div>
			</div>

		<?php } ?>
		
		<?php  if ($option == 3){ ?>

			<div style=" padding-top: 5px; font-size:30px; height:60px; text-align:center; width:100%; background-color:#f0f0f0;">
				<span style="  vertical-align: middle;"> <b>LIFETIME</b> ACCESS </span>
			</div>
			<div class="caja_content">
				<div class="letras_caja">
					One-time fee
				</div>
				<div class="letras_caja">
					*5-Day Money Back Guarantee
				</div>
				<div class="letras_abajo">
					Allows time to connect with mentors
				</div>
			</div>

		<?php } ?>

		<div class="footer_caja">
			<!-- <img src="<?php echo $this->webroot;?>img/sitelock.png"> -->
			<a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=joinmentor.co','SiteLock','width=600,height=600,left=160,top=170');" ><img alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/joinmentor.co"/></a>
		</div>
	</div>

</div>
</div>

<style type="text/css">

	.Footer {
		margin-top:60px;
	  padding: 35px 30px 45px 25px !important;
	}
</style>

<script type="text/javascript">

	document.getElementById('Cardnumber').addEventListener('input', function (e) {
	  e.target.value = e.target.value.replace(/[^\dA-Z]/g, '').replace(/(.{4})/g, '$1 ').trim();
	});


	$('.what').click(function(){
		$('.tooTi').css('display','block');
	});
	var WEBRROT = "<?php echo $this->webroot;?>";

	$(document).ready(function(){ 
		
		if(($(window).width() <= 750)){
			$('.tooTi').css('left', '-210px');
			$('.tooTi').css('width', '300px');
	  }
	});

	$('.submitPay').click(function(){
		$('.error').css('display', 'none');
		$('.sucss').css('display', 'none');
		if( $('#Cardname').val() == "" || $('#Cardnumber').val() == "" || $('#Cardcode').val() == "" || $('#Carddate').val() == "" || $('#Cardyear').val() == ""){
			$('.contentMSG').css('display', 'block');
			$('.error').css('display', 'block');
			setTimeout(function(){
				$('.error').css('display', 'none');
			},10000);
			return false;
		}

		var numC = $('#Cardnumber').val();
		numC = numC.replace(" ", "");
		numC = numC.replace(" ", "");
		numC = numC.replace(" ", "");
		var cost = "<?php echo $option?>";
		var cvv = $('#Cardcode').val();
		var name = $('#Cardname').val();
		var dateM = $( "#Cardday option:selected" ).html();
		var dateY = $( "#Cardyear option:selected" ).html(); 

		if(dateM <= 9){
			dateM = "0" + dateM;
		}

		var data = {
			numC : numC,
			cost : cost,
			cvv : cvv,
			name : name,
			dateM : dateM,
			dateY : dateY
		}
		$.ajax({
			url: WEBRROT+'dashboards/proccess_pay',
			dataType:'json',
			data: {data:data},
			type:'post',
			success: function(data){
				if(data['code'] == 0){
					$('.contentMSG').css('display', 'block');
					$('.error').css('display', 'block');
					setTimeout(function(){
						$('.error').css('display', 'none');
					},10000);
				}
				else{
					if(cost == 1){
						var co = 22.00;
					}
					else{
						var co = 49.00;
					}
					$('#pixel').html('<img src="https://shareasale.com/sale.cfm?amount='+co+'&tracking='+data['id']+'&transtype=SALE&merchantID=61059" width="1" height="1">');
					$('.titleFi').css('visibility', 'hidden');
					$('.conteL').css('display', 'none');
					$('.conteR').css('display', 'block');
					$('.sucss').css('display','block');
					$('#nextQ').css('display', 'block');
				}
			},
			error: function(a,e,i){

			}
		})
	});

</script>