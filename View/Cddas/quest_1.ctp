<style>
.title {
  background-color: rgba(0, 0, 0, 0.2);
width: 100%;
padding-left: 2%;
position: absolute;
bottom: 0;
}
.title p{
  font-size: 2.6em;
color: white;
}

#header {
	background-image: url('/vision_mentr/img/atardecer.jpg');
width: 100%;
height: 400px;
position: relative;
}

#container {
	padding-top: 4%;
text-align: justify;
}

.botones {
	position: relative;
	margin-top: 5em;
}


</style>



<div id="course-content">
	<section class="col-xs-12 col-sm-8 col-md-8" >
		<div style="border-top: 2px solid #ececec;padding-top: 1em;"></div>

		<div id="container">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat lacus non orci iaculis, eu imperdiet dolor congue. Pellentesque facilisis turpis eget felis molestie, vitae vulputate magna faucibus. Vestibulum auctor vestibulum est non ornare. Morbi at libero a augue pharetra lobortis nec ac diam. In id ullamcorper magna. Sed vitae consequat metus. Duis eget sodales augue. Maecenas faucibus lorem in est venenatis, sollicitudin imperdiet velit lobortis. In at magna vel mi auctor tempus ut eget mi. Maecenas a mi tortor. Sed consequat malesuada est. Pellentesque ut quam pulvinar, pulvinar ligula vitae, fermentum mauris.
			</p>	

			<div class="botones">
				<label>
					How useful did you find this resource?
				</label>
				<div class="faces" style="position:absolute;top:0;right: 16em;margin-top: -1em;">
					<button class="mentr-ok-btn" style="background-image: url('/vision_mentr/img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
					<button class="mentr-ok-btn" style="background-image: url('/vision_mentr/img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
					<button class="mentr-ok-btn" style="background-image: url('/vision_mentr/img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
				</div>
				<div style="position:absolute;top:0;right: 0;margin-top: -1em;">
					<button class="mentr-ok-btn-large" type="button" style="width: 12em;">Got it!</button>
				</div>
			</div>
		<div style="margin-top:3em;"></div>
		</div>
	</section>

	<section class="col-xs-12 col-sm-4 col-md-4">
		<div style="border-top: 2px solid #ececec;padding-top: 1em;"></div>
		<p style="font-size: 1.6em; color:black;"><?php echo __('Related articles',true); ?></p>
		<?php for($x=0; $x < 3; $x++ ):?>
		<div class="quiz-result-cursos">
			<div id="quiz-result-img-content">
				<div id="tittle">
					Tittle
				</div>
			</div>
		</div>
		<?php endfor;?>
	</section>
</div>