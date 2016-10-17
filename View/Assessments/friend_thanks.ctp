<style type="text/css">
#dash_content{
	  background-color: white;
}
</style>
<div style="text-align: center;">
 
	<div id="thx" style="position: relative; z-index:0;">
		<?php echo $this->Html->image('thankyou.png');?>
	</div>
	<div id="contThx" style ="width : 100% ; background-color: white; position: relative; margin-top: -150px; z-index:1;">
		<br>
		<p style="font-size : 24px;">Your answers will greatly contribute to shaping <?php echo $member['User']['first_name'];?>’s career decisions. </p>
		<br>
		<p style="font-size : 24px;line-height: 46px;"> Need some help yourself with your career decision making? Go to Mentor’s <a href="#" style="  text-decoration: underline; color: black;"><b>website</b></a> for some quality resources or DISCOVER YOUR CAREER DECISION IMPEDIMENTS with Mentor’s assessment.</p>
<br>
	</div>

	<div style="text-align: center; font-size:16px;">
		<button style="  width: 30%" type="button" id="cdda" class="quiz-result-btn boton_module">TAKE THE ASSESSMENT</button>
	</div>
</div>

<script type="text/javascript">
	$('#cdda').click(function(){
		window.location = WEBROOT;
	})
</script>