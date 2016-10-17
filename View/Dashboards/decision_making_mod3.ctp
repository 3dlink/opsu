<div style="min-height: 1700px;  background-color: #f7f7f7;">
	<div>
		
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>Dashboards"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Improve My Decision-Making',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="contenedor_video">
					<div class="video" style="width: 100%;">
						<?php echo $this->Html->image('vimeo.jpg',array('style'=>'width: 100%;'));?>
					</div>
					<div style="padding: 20px;text-align: justify;padding-top: 40px;">
						<div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat lacus non orci iaculis, eu imperdiet dolor congue. Pellentesque facilisis turpis eget felis molestie, vitae vulputate magna faucibus. Vestibulum auctor vestibulum est non ornare. Morbi at libero a augue pharetra lobortis nec ac diam. In id ullamcorper magna. Sed vitae consequat metus. Duis eget sodales augue. Maecenas faucibus lorem in est venenatis, sollicitudin imperdiet velit lobortis. In at magna vel mi auctor tempus ut eget mi. Maecenas a mi tortor. Sed consequat malesuada est. Pellentesque ut quam pulvinar, pulvinar ligula vitae, fermentum mauris.
								<br><br>
				
								Maecenas fermentum vulputate pulvinar. Pellentesque placerat, lectus quis posuere mattis, tellus tortor rutrum risus, at aliquet mauris sapien vel tortor. Suspendisse vel lorem ut sem porta hendrerit. Aliquam quis magna vitae odio tincidunt congue at a orci. Quisque eget sodales nisl. Etiam vel purus vel mi viverra molestie. Fusce bibendum dictum velit vel dignissim. Morbi mattis quam sed dolor ultrices bibendum. Sed quis risus ac nulla porta suscipit. Nullam lacinia erat purus, quis ultricies nibh accumsan sed. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus congue aliquet est at fringilla. Sed luctus pharetra enim eget viverra. Pellentesque porttitor molestie mi sit amet maximus. In vulputate sem vel erat auctor, quis ultricies ipsum porta. Etiam semper mollis quam, non placerat massa pretium id.
							</p>
						</div>
					<div id="link">
						<a href="<?php echo $this->webroot;?>dashboards/quest_mod3">Continue this module</a>
					</div>
					</div>
					<div style="clear:both;"></div>
			</div>
			<!-- .......................................................... -->		
			<div id="comments_izq" class="comments">
				<div>
					<label class="titulo what_members">
						<b style="padding-left: 20px;">
							What members say about this module
						</b>
					</label>
				</div>

					<div class="contenedor_personas">
						<div class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/people1.png');width: 170px;height: 170px;margin-top: 40px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Jane Roberts
									</label>
									<br>
									<span id="job">
										 Macworld
									</span>
								</div>
								<div id="comment">
									<p >
									Lorem ipsum dolor sit amet, consectetuer 
									adipiscing elit. Ut quis mauris eget ipsum 
									varius dictum. In lacus nisi, facilisis eu, 
									pretium sed, dapibus et, tellus. Phasellus sodales 
									consectetuer eros. Sed tellus. Sed a mauris nec orci 
									volutpat ultrices. Donec vitae sem. Praesent nibh nisl.
									</p>
								</div>
							</div>
						</div>		

						<div class="people-sayContent" style="display:table-cell;width:30px;"></div>

						<div class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/people2.png');width: 170px;height: 170px;margin-top:40px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Paul Hewson
									</label>
									<br>
									<span id="job">
										 The Verge
									</span>
								</div>
								<div id="comment">
									<p>
									Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget, elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum cursus odio.
									</p>
								</div>
							</div>
						</div>
					</div>



				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</section>	
		<section class="seccion_derecha">
			<article id="article_tips">
					<big>
						<label class="titulo titulo_izquierda">This module will help you</label>
					</big>
					<div class="caja_module">
						<table>
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
								<td>
										Throw light on what you enjoy doing
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
								<td>
										Identify your strongest aptitudes, both natural and aquired
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
								<td>
										Analysis of your preferred work style
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
								<td>
										Understand how your close friends and family see you
								</td>
							</tr>
						</table>
					</div>
					<div style="text-align: center; font-size:16px;">
						<button type="button" onclick="window.location.href='<?php echo $this->webroot;?>dashboards/quest_mod3'" class="quiz-result-btn boton_module">
							CONTINUE THIS MODULE
						</button>
					</div>
			</article>	

			<article id="article_progression">
				<label class="titulo progression titulo_izquierda">Progression</label>
	
				<div style="min-height: 80px;  margin-top: 17px;">
					<div>
						<div style="color:#333333;	">
							<big style="font-size: 30px;">32</big>
							<small style="font-size: 18px;">%</small>
						</div>
						<div class="progresionBarDefault">
							<div id="barProgress">
							</div>
							<div id="passLine"></div>
							<div id="finishLine"></div>
						</div>
					</div>
				</div>
	
				<div style="min-height: 280px;border: solid 1px #cccccc;padding: 20px 20px 20px 20px;position:relative;">
					<p style="text-align: justify;font-size: 16px;">You've aerned 80 points. Earn 160 additional points for a silver key. Use it to unlock additional modules.</p>
	
					<div class="caja_llaves">							
						<div class="llaves">
							<div style="display: inline-block;">
								<div id="keyBlue">
									<div class="centerV2">
										<img src="<?php echo $this->webroot;?>img/keyB.png">
									</div>
								</div>
							</div>
							<p style="margin-top: 16px;"><span style="font-size: 30px;">300</span> <br> points needed</p>
						</div>
						<div class="llaves">
							<div style="display: inline-block;">
								<div id="keyYellow">
									<div class="centerV2">
										<img src="<?php echo $this->webroot;?>img/keyA.png">
									</div>
								</div>
							</div>
							<p style="margin-top: 18px;"><span style="font-size: 30px;">500</span> <br> points needed</p>
						</div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</article>

			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>





			<div id="comments_abj" class="comments">
				<div>
					<label id="mod_comments" class="titulo">
						<b style="padding-left: 20px;">
							What members say about this module
						</b>
					</label>
				</div>

					<div class="contenedor_personas">
						<div class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/people1.png');width: 170px;height: 170px;margin-top: 40px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Jane Roberts
									</label>
									<br>
									<span id="job">
										 Macworld
									</span>
								</div>
								<div id="comment">
									<p >
									Lorem ipsum dolor sit amet, consectetuer 
									adipiscing elit. Ut quis mauris eget ipsum 
									varius dictum. In lacus nisi, facilisis eu, 
									pretium sed, dapibus et, tellus. Phasellus sodales 
									consectetuer eros. Sed tellus. Sed a mauris nec orci 
									volutpat ultrices. Donec vitae sem. Praesent nibh nisl.
									</p>
								</div>
							</div>
						</div>		

						<div class="people-sayContent" style="display:table-cell;width:30px;"></div>

						<div id="segunda_persona" class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/people2.png');width: 170px;height: 170px;margin-top:40px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Paul Hewson
									</label>
									<br>
									<span id="job">
										 The Verge
									</span>
								</div>
								<div id="comment">
									<p>
									Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget, elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum cursus odio.
									</p>
								</div>
							</div>
						</div>
					</div>



				<div style="clear:both;"></div>
			</div>
		</section>
		<div style="clear: both;"></div>
	</div>			
</div>




