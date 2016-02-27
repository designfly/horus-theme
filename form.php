<?php
/*

Template Name: Formularz

*/

?>

<?php get_header() ?>
					<?php the_post(); ?>
<!-- start page OrtGeo -->

<div class="container">
	
	

				<div class="info_navi-md"></div>
				<div class="bgcolor"><h3><?php the_title(); ?></h3></div>

<div class="row">
					
	
								 <div class="form-block">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div id="map"></div>
					</div>
					 <div class="col-md-6 col-sm-6">
					 <?php echo do_shortcode( '[contact-form-7 id="43" title="Kontakt"]' ) ?> 
						<!--<form method="post" id="custom_form" name="custom_form">
							<div class="form-group">
								<label >Imię i Nazwisko</label>
								<input  type="text" id="name" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label >Email</label>
								<input type="text" id="email" name="email" class="form-control" >
						  	</div>
						  	<div class="form-group">
								<label >Wiadomość</label>
								<textarea type="text" id="message" name="message" class="form-control"></textarea>
							</div>
						  	<div class="form-group">
								<label>Captcha (zabezpieczenie antybotowe)</label>
								<div id="spambox">
									<div class="spam"></div>  
								</div> 
							</div>
						  	<button type="submit" class="btn btn-default" id="submit">Wyślij</button>
						</form>-->
					</div> 
				</div>
			</div>
		</div> 


			</div>

</div>

			
<?php get_footer() ?>