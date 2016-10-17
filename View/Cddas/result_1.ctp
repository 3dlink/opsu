<?php echo $this->Html->script('jquery-1.11.2.js');?>
<?php echo $this->Html->script('../library/jquery.knob.js');?>
<div class="container" id="quiz-result-container">
	<section class="col-xs-12 col-sm-8 col-md-8">
		<article id="quiz-result-principal">
			<div id="quiz-result-principal-container">
				<div id="img-principal">
					<div id="tittle">
						Your career decision impediments
					</div>
				</div>
			</div>
		</article>
		<article class="quiz-result-resultado">
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 1em; margin-top: 1em;">
				<big>
					<label>Information about yourselft</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4" style="text-align: center;">
				<div style="display: inline-block;">
					<input type="text" value="<?php echo (($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10;?>" class="dial">
				</div>
			</div> 
			<div class="col-xs-12 col-sm-12 col-md-8">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lorem mi, vestibulum tempus nibh ut, egestas tincidunt urna. Quisque iaculis efficitur tortor a fermentum. Maecenas dictum a lorem et ultricies. In molestie leo vitae dolor posuere malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus ligula nec finibus vulputate. Vivamus sed quam porta ligula tincidunt pharetra eu ut dolor. Nam fringilla placerat turpis quis consequat. Duis pretium sollicitudin lacus sit amet posuere. Praesent accumsan lorem sed pretium cursus.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 1em; margin-top: 1em;">
				<big>
					<label>Information about occupations</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4" style="text-align: center;">
				<div style="display: inline-block;">
					<input type="text" value="<?php echo $dataQuest['result']['F126']*10;?>" class="dial2">
				</div>
			</div> 
			<div class="col-xs-12 col-sm-12 col-md-8">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lorem mi, vestibulum tempus nibh ut, egestas tincidunt urna. Quisque iaculis efficitur tortor a fermentum. Maecenas dictum a lorem et ultricies. In molestie leo vitae dolor posuere malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus ligula nec finibus vulputate. Vivamus sed quam porta ligula tincidunt pharetra eu ut dolor. Nam fringilla placerat turpis quis consequat. Duis pretium sollicitudin lacus sit amet posuere. Praesent accumsan lorem sed pretium cursus.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 1em; margin-top: 1em;">
				<big>
					<label>Information about occupations</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4" style="text-align: center;">
				<div style="display: inline-block;">
					<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial3">
				</div>
			</div> 
			<div class="col-xs-12 col-sm-12 col-md-8">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lorem mi, vestibulum tempus nibh ut, egestas tincidunt urna. Quisque iaculis efficitur tortor a fermentum. Maecenas dictum a lorem et ultricies. In molestie leo vitae dolor posuere malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rhoncus ligula nec finibus vulputate. Vivamus sed quam porta ligula tincidunt pharetra eu ut dolor. Nam fringilla placerat turpis quis consequat. Duis pretium sollicitudin lacus sit amet posuere. Praesent accumsan lorem sed pretium cursus.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<?php //endfor;?>		
		<article id="Recommendations">
			<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 1em; margin-top: 1em;">
				<big>
					<label>Recommendations</label>
				</big>
				<div>
					<ul>
						<li>
							Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus consectetur enim. Morbi mollis elementum tellus eu elementum.
						</li>
						<li>
							Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus consectetur enim. Morbi mollis elementum tellus eu elementum.
						</li>
						<li>
							Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus consectetur enim. Morbi mollis elementum tellus eu elementum.
						</li>
					</ul>
				</div>
			</div>	
			<div style="text-align: center;">
				<button type="button" class="quiz-result-btn">
					Learn more about the Career Decision Course
				</button>
			</div>
					
		</article>		
	</section>
	<section class="col-xs-12 col-sm-4 col-md-4" style="border-top: 1px solid rgb(189, 189, 189); margin-top: 1em;">
		<?php for($x=0; $x < 10; $x++ ):?>
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
<script>
    $(function() {
        $(".dial").knob({
				'min':0,
				'max':100,
				'readOnly':true,
				'width': 150,
				'inputColor': 'rgb(93, 170, 154)',
				'fgColor': 'rgb(93, 170, 154)',
				'bgColor': 'rgb(223, 237, 234)',
				'font' : 'lato',
				'thickness':'.1' 
				
            });
        $(".dial2").knob({
			'min':0,
			'max':100,
			'readOnly':true,
			'width': 150,
			'inputColor': 'rgb(159, 47, 89)',
			'fgColor': 'rgb(159, 47, 89)',
			'bgColor': 'rgb(235, 212, 221)',
			'font' : 'lato',
			'thickness':'.1'
			
        });
        $(".dial3").knob({
			'min':0,
			'max':100,
			'readOnly':true,
			'width': 150,
			'inputColor': 'rgb(33, 174, 226)',
			'fgColor': 'rgb(33, 174, 226)',
			'bgColor': 'rgb(210, 238, 249)',
			'font' : 'lato',
			'thickness':'.1'
			
        });
    });
</script>