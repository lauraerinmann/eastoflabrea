<?php
/*
Template Name: News Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
						<!-- wrapped in a section shows specified post -->
						<?php
						//display 10 posts for category id 47
							$args=array(
							  'cat' => 'news',
							  'post_type' => 'post',
							  'post_status' => 'publish',
							  'posts_per_page' => 10,
							  'caller_get_posts'=> 1
							  );
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							  echo 'List of Posts';
							  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							  <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
							   <?php
							  endwhile;
						}//enter thumbnail image in the <p> from single post
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
						<!-- end single post -->
						<section class="post_content">
							<?php the_content(); ?>
							
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>