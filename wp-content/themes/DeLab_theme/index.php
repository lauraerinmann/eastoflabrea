<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php bloginfo( 'name' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" >
</head>

<body>
	<header>
		<h1><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></h1>
		<nav>
			<ul>
				<?php wp_nav_menu( array( 'menu' => 'Main Nav' ) ); ?>
			</ul>
		</nav> 
    </header>

    <section>
	</section>	
 <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<!-- content here -->
		<h2><a href="<?php the_permalink(); ?>" title="For more info: <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		</article>
		<?php endwhile; else: ?>
			<p><?php_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
			</section>		
</body>
</html>
<?php get_footer(); ?>
