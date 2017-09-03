<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>
			<?php
        $args = array(
          'post_type' => 'html5-blank',
          'posts_per_page' => -1,
          'order' => 'ASC'
        );
        $query = new WP_Query($args);

      ?>
			
			<pre><?php //print_r($query) ?></pre>
			<select name="" id="seleccion">
				<option value="seleccione" selected="true">Seleccione</option>
				<?php while ($query->have_posts()) : $query->the_post(); ?>				
					<option value="<?php the_ID(); ?>"> <?php the_title(); ?> - <?php the_ID(); ?></option>
				<?php endwhile; ?>
			</select>

		<?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1_copy"]' ); ?>

		<?php if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); ?>
			

			<!-- article -->
			<article class="slider" id="<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php 
				  // Ruta de la imagen destacada (tamaño completo)
				  global $post;
				  $thumbID = get_post_thumbnail_id( $post->ID );
				  $url_img = wp_get_attachment_url( $thumbID );				  
				?>
				<?php the_title(); ?>
				<?php the_content(); ?>
				<?php the_field('texto'); ?>
				<?php the_field('numero'); ?>
				<img src="<?php echo $url_img ?>" width="200">

			</article>
			<!-- /article -->

		<?php endwhile; ?>


		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.slider').hide();
		$('#seleccion').change(function(event) {				
			var id_post = $('#seleccion').val();
			//alert(id_post);
			$('.slider').hide();			
			$('#'+id_post).show();
			$('#valor-oculto').val(id_post)
		});
	});	
</script>