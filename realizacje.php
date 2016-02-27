<?php
/*

Template Name: Realizacje

*/

?>

<?php get_header() ?>
					
<div class="service-block">
			<div class="container">
				<div class="info_navi-md"></div>
				<div class="gallery-block">

			<div class="container">
				<div class="row">
										 <?php
// WP_Query arguments
$args = array (
	'post_type'              => 'realizacje',
);


				$the_query = new WP_Query( $args );

				while ( $the_query->have_posts() ) : $the_query->the_post();?>

					<div class="col-md-4 col-sm-4">
							<?php 
if ( has_post_thumbnail() ) {
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
	echo '<a class="fancybox" rel="gallery_group" href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
	the_post_thumbnail( 'thumbnail' );
	echo '</a>';
}
?>
						
					</div>

						<?php endwhile; ?>

			<?php wp_reset_postdata();
				?>	
				</div>
				
			</div>
		
		</div>
			</div>
		</div>	
<!-- koniec service block -->


<?php get_footer() ?>