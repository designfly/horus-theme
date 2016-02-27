<?php get_header() ?>
					<?php the_post(); ?>
<!-- start page OrtGeo -->

<div class="container">
	
	

				<div class="info_navi-md"></div>
			
				<div class="bgcolor"><h3><?php the_title(); ?></h3></div>
				

<div class="row">
					
					<?	if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	echo '<div class="col-md-3"> <a   class="thumbnail"  href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
	the_post_thumbnail( 'medium' );
	echo '</a> </div>';
}



?>

					
					<div class="col-md-9">
						<p><?php the_content(); ?></p>
				</div>
			</div>

</div>

			
<?php get_footer() ?>