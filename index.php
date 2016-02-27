<?php get_header() ?>
		<!-- slider start -->
		<div id="slider" class="slider-col">
			<div class="row-fluid">
				
					

						<div class="camera_slider">
							<div data-src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg"></div>
							<div data-src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg"></div>
						</div>

			
			</div>
		</div>		

<!-- slider end -->
		<div class="service-block">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						    
						    <?php
// WP_Query arguments
$args = array (
	'p'                      => '22',
	'post_type'              => 'oferta',
);

				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();?>
 							
								<section><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon_7.png" class="img-responsive" alt="Responsive image">

									<div class="text"><h3><?php the_title(); ?></h3></div>

								</section>
								       
<a href="<?php the_permalink() ?>">									
									<div class="info"><p><?php the_excerpt(); ?></p>

<div class="more">+</div></a>
									</div>


								
						<?php endwhile; ?>

			<?php wp_reset_postdata();
				?>	
						
					</div>
					<div class="col-md-4 col-sm-4">
						    
						    <?php
// WP_Query arguments
$args = array (
	'p'                      => '23',
	'post_type'              => 'oferta',
);

				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();?>
 							
								<section><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon_5.png" class="img-responsive" alt="Responsive image">

									<div class="text"><h3><?php the_title(); ?></h3></div>

								</section>
								       
<a href="<?php the_permalink() ?>">									
									<div class="info"><p><?php the_excerpt(); ?></p>

<div class="more">+</div></a>
									</div>


								
						<?php endwhile; ?>

			<?php wp_reset_postdata();
				?>	
						
					</div>
					<div class="col-md-4 col-sm-4">
						    
						    <?php
// WP_Query arguments
$args = array (
	'p'                      => '24',
	'post_type'              => 'oferta',
);

				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();?>
 							
								<section><img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon_6.png" class="img-responsive" alt="Responsive image">

									<div class="text"><h3><?php the_title(); ?></h3></div>

								</section>
								       
<a href="<?php the_permalink() ?>">									
									<div class="info"><p><?php the_excerpt(); ?></p>

<div class="more">+</div></a>
									</div>


								
						<?php endwhile; ?>

			<?php wp_reset_postdata();
				?>	
						
					</div>
			</div>
		</div>	
<!-- koniec service block -->

<div class="container">
	<div class="podstrona"><h3>Ostatnie realizacje</h3></div>

				<div class="info_navi-md"></div>
				<div class="info_navi-ms"></div>

<div class="service-block">


<!-- carousel -->

<div class="slider">
                      
                        <div class="slides-container">
                            <div class="items">
 <?php
// WP_Query arguments
$args = array (
	'post_type'              => 'realizacje',
);

				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();?>

                                <div>
                                    <a  href="#"><?php the_post_thumbnail('thumbnail') ?></a>
                                    
                                  
                                    <a class="more" href="<?php the_permalink() ?>">+</a>
                                </div>


                               

                              <?php endwhile; ?>

			<?php wp_reset_postdata();
				?>	

                            </div>
                        </div>
                      
                    </div>

<!-- /carousel -->

</div>

</div>
			
<?php get_footer() ?>