<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 5,
		TAG: 'results_CDDA'
	}
})

</script>

<?php echo $this->Html->script('../library/jquery.knob.js');
$arrayf26=array();
$arrayf26['-8']=100;
$arrayf26['-7']=96;
$arrayf26['-6']=91;
$arrayf26['-5']=87;
$arrayf26['-4']=83;
$arrayf26['-3']=78;
$arrayf26['-2']=74;
$arrayf26['-1']=70;
$arrayf26['0']=65;
$arrayf26['1']=61;
$arrayf26['2']=57;
$arrayf26['3']=52;
$arrayf26['4']=48;
$arrayf26['5']=44;
$arrayf26['6']=39;
$arrayf26['7']=35;
$arrayf26['8']=31;
$arrayf26['9']=26;
$arrayf26['10']=22;
$arrayf26['11']=18;
$arrayf26['12']=13;
$arrayf26['13']=9;
$arrayf26['14']=5;
?>

<style>

.texto{
  margin-left: 300px;
  width: 470px
}

</style>

<div class="" id="quiz-result-container">
	<section id="result-container-principal">
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
			<div class="result-header">
				<big>
					<label>Information about yourselft</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div class="" style="text-align: center; float: left; margin: 0 30px 0 0;">
				<div style="display: inline-block;">
					<input type="text" value="<?php echo (($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10;?>" class="dial">
				</div>
			</div> 
			<div class="texto">
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut quis mauris eget ipsum varius dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et, tellus. Phasellus sodales consectetuer eros. Sed tellus. Sed a mauris nec orci volutpat ultrices. Donec vitae sem. Praesent nibh nisl, pretium non, euismod vitae, gravida et, justo. Cras non sem in magna semper vulputate. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>
					Nunc metus. Nulla molestie, orci id fermentum sollicitudin, enim quam egestas pede, eu suscipit sem nulla ut mauris. Vestibulum congue. Sed id eros. Curabitur tortor nibh, suscipit quis, venenatis eu, posuere sed, ligula. Nullam mauris. Aenean ligula diam, cursus nec, bibendum quis, laoreet quis, nisl.<br><br>
					Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget, elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum cursus odio. Etiam consectetuer, risus ac fermentum pretium.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="result-header">
				<big>
					<label>Information about occupations</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div style="text-align: center; float: left; margin: 0 30px 0 0;">
				<div style="display: inline-block;">
					<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial2" style="font-weight:100; font-size:48px">
				</div>
			</div> 
			<div class="texto">
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut quis mauris eget ipsum varius dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et, tellus. Phasellus sodales consectetuer eros. Sed tellus. Sed a mauris nec orci volutpat ultrices. Donec vitae sem. Praesent nibh nisl, pretium non, euismod vitae, gravida et, justo. Cras non sem in magna semper vulputate. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>
					Nunc metus. Nulla molestie, orci id fermentum sollicitudin, enim quam egestas pede, eu suscipit sem nulla ut mauris. Vestibulum congue. Sed id eros. Curabitur tortor nibh, suscipit quis, venenatis eu, posuere sed, ligula. Nullam mauris. Aenean ligula diam, cursus nec, bibendum quis, laoreet quis, nisl.<br><br>
					Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget, elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum cursus odio. Etiam consectetuer, risus ac fermentum pretium.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="result-header">
				<big>
					<label>Information about occupations</label>
				</big><br>
				<label>
					you fell that you do not have enough information about yourselft
					
				</label>
			</div>
			<div style="text-align: center; float: left; margin: 0 30px 0 0;" >
				<div style="display: inline-block;">
					<input type="text" value="<?php echo $arrayf26[$dataQuest['result']['F126']];?>" class="dial3">
				</div>
			</div> 
			<div class="texto">
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut quis mauris eget ipsum varius dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et, tellus. Phasellus sodales consectetuer eros. Sed tellus. Sed a mauris nec orci volutpat ultrices. Donec vitae sem. Praesent nibh nisl, pretium non, euismod vitae, gravida et, justo. Cras non sem in magna semper vulputate. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>
					Nunc metus. Nulla molestie, orci id fermentum sollicitudin, enim quam egestas pede, eu suscipit sem nulla ut mauris. Vestibulum congue. Sed id eros. Curabitur tortor nibh, suscipit quis, venenatis eu, posuere sed, ligula. Nullam mauris. Aenean ligula diam, cursus nec, bibendum quis, laoreet quis, nisl.<br><br>
					Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget, elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum cursus odio. Etiam consectetuer, risus ac fermentum pretium.
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>
		<?php //endfor;?>		
		<article id="Recommendations" style="border-bottom: 1px solid #bdbdbd;">
			<div class="" style="margin-bottom: 1em; margin-top: 40px;font-size: 20px;font-weight: 600;">
				<big>
					<label>Recommendations</label>
				</big>
				<div >
					<div style="margin-top: 40px;">
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div id="recomendacion">
								Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. 
								Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus 
								consectetur enim. Morbi mollis elementum tellus eu elementum.
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div id="recomendacion">
								Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. 
								Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus 
								consectetur enim. Morbi mollis elementum tellus eu elementum.
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div id="recomendacion">
								Mauris cursus, lacus ut tincidunt tempor, risus tellus congue libero, nec congue ipsum lorem ut neque. 
								Vivamus condimentum metus at vulputate sollicitudin. Duis sem arcu, venenatis quis velit quis, luctus 
								consectetur enim. Morbi mollis elementum tellus eu elementum.
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
			</div>	
			<div>
				<button type="button" class="quiz-result-btn" style="margin-bottom: 40px;margin-left: 78px;">
					Learn more about the Career Decision Course
				</button>
			</div>
					
		</article>		
	<div style="margin-top:100px"></div>
	</section>	
</div>

	<section style="float: left; width: 370px;">
		<?php echo $this->element('article_list');?>
	</section>

	<script>
    $(function() {
        $(".dial").knob({
				'min':0,
				'max':100,
				'readOnly':true,
				'width': 270,
				'height': 270,
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
			'width': 270,
				'height': 270,
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
			'width': 270,
				'height': 270,
			'inputColor': 'rgb(33, 174, 226)',
			'fgColor': 'rgb(33, 174, 226)',
			'bgColor': 'rgb(210, 238, 249)',
			'font' : 'lato',
			'thickness':'.1'
			
        });
    });
</script>