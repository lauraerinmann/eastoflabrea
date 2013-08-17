<?php /*
 Template Name: Homepage
 */
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
			
				<div id="main" class="span12 clearfix" role="main">

					<?php

					$use_carousel = of_get_option('showhidden_slideroptions');
      				if ($use_carousel) {

					?>

					<div id="myCarousel" class="carousel">

					    <!-- Carousel items -->
					    <div class="carousel-inner">

					    	<?php
							global $post;
							$tmp_post = $post;
							$show_posts = of_get_option('slider_options');
							$args = array( 'numberposts' => $show_posts ); // set this to how many posts you want in the carousel
							$myposts = get_posts( $args );
							$post_num = 0;
							foreach( $myposts as $post ) :	setup_postdata($post);
								$post_num++;
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-carousel' );
							?>

						    <div class="<?php
	if ($post_num == 1) { echo 'active';
	}
 ?> item">
						    	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('wpbs-featured-carousel'); ?></a>

							   	<div class="carousel-caption">

					                <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					                <p>
					                	<?php
					                		$excerpt_length = 100; // length of excerpt to show (in characters)
					                		$the_excerpt = get_the_excerpt(); 
					                		if($the_excerpt != ""){
					                			$the_excerpt = substr( $the_excerpt, 0, $excerpt_length );
					                			echo $the_excerpt . '... ';
					                	?>
					                	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="btn btn-primary">Read more &rsaquo;</a>
					                	<?php } ?>
					                </p>

				                </div>
						    </div>

						    <?php endforeach; ?>
							<?php $post = $tmp_post; ?>

					    </div>

					    <!-- Carousel nav -->
					    <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
					    <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
				    </div>

				    <?php } // ends the if use carousel statement ?>
				   <div id="outer_box"><!-- start margin -->
				   <!--social bar start-->
				   <!--soical bar end-->
				   <section class="row-fluid"><!--boxes start-->
				   	<article class="span4" id="box_one">
				   			<?php
						//display 10 posts for category id news
							$args=array(
							  'cat' => 'news',
							  'post_type' => 'post',
							  'post_status' => 'publish',
							  'posts_per_page' => 1,
							  'caller_get_posts'=> 1
							  );
							$my_query = null;
							$my_query = new WP_Query($args);
							if( $my_query->have_posts() ) {
							  while ($my_query->have_posts()) : $my_query->the_post(); ?>
							  <p><a href="<?php the_permalink() ?>" rel="bookmark" 
							  	title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?><?php the_post_thumbnail(); ?></a></p>
							   <?php
							  endwhile;
						}//enter thumbnail image in the <p> from single post
					wp_reset_query();  // Restore global post data stomped by the_post().
					?>
					
					
				   	</article>
				   	<article class="span4" id="box_one">
				   	</article>
				   	<article class="span4" id="box_one">
				   	</article>
				   </section>
				   <!--boxes end-->
				   <section class="row-fluid" id="About"><!--about us start-->
				   		<article class="span12">
				   			<div class="span4">
								<img class="about_us_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
							<h1 class="span4" id="about_us_title">About Us</h1>
							<div class="span4">
								<img class="about_us_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   		</article>
						<article>
							<blockquote id="about_us">
								design east of La Brea (you can call us <span id="about_us_cusColor">de LaB</span>) is a Los Angeles
								based nonprofit which celebrates and supports local creatives in
								their efforts to enlighten, improve and engage the city.<br /><br />
								Through events that are educational, inspirational, and interactive, de LaB
								unites an enthusiastic community of local residents who are invested
								in the future of L.A.
							</blockquote>
						</article>
				   </section><!--about us end-->
				   <section class="row-fluid"><!--our vision for los angeles start-->
				   		<article class="span12" id="vision">
				   		</article>
				   </section>
				     <section class="row-fluid" id="firm_beli">
    					<article class="span6" id="quote">
    						<blockquote>
      						<p>We firmly believe that the east side of Los Angeles is
      							home to the most exciting creative community in the
      							world.  We bring exposure to its artists, designers 
      							and architects-both legendary and emerging-through
      							events, workshops and public engagment projects </p>
      						</blockquote>
    					</article>
   					 	<article class="span6" id="quote">
   					 		<blockquote>
      						<p>that focus on building a better L.A. Together we explore
      							the changing urban environment, discover new projects and
      							ideas, and learn about the city in which we live, helping
      							us to become more passionate, more invested Angelenos.</p>
      						</blockquote>
    					</article>
  					</section><!--our vision for los angeles end-->
				   <section class="row-fluid"><!--hosts start-->
				   		<article class="span12">
							<div class="span4">
								<img class="hosts_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   			<h1 class="span4" id="hosts_title">Hosts</h1>
							<div class="span4">
								<img class="hosts_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   		</article>
				   	</section>
				   	<section class="row-fluid">
						<article class="span12">
							<div class="span2">
								<span>
									<img class="hostsPPL_img" src="<?php bloginfo('template_directory'); ?>/images/bio-alissawalker@x1.jpg" alt= " " />
								</span>
								<h3 class="hosts1_cusColor">Alissa<br />Walker</h3>
								<span>PRESIDENT/<br />CO-FOUNDER</span>
							</div>
							<div class="span4">
								<p>
									Alissa writes about design, architecture, cities, transportation
									and walking for many publications including Los Angeles Magazine,
									Dwell, Fast Company, LA Weekly and the Los Angeles Times. She
									is the urbanism editor for <span class="hosts1_cusColor">Gizmodo</span>;
									and a "DJ" (design journalist) for the KCRW public radio show;
									<span class="hosts1_cusColor">DnA: Design and Architecture</span>.
									In 2010 she was named a USC Annenberg/Getty Arts Journalism
									Fellow for her writing on design and urbanism, and in 2011 she was
									awarded an ArtPlace grant for the initiative GOOD Ideas for
									Cities. Alissa lives in a royal blue house in Silver Lake where
									she throws ice cream socials, tends to a drought-tolerant garden,
									writes infrequently on her blog, <span class="hosts1_cusColor">A Walker
									in LA</span>, and relishes life in L.A. without a car.<br /><br />
									Twitter: <span class="hosts1_cusColor">@awalkerinLA</span><br />
									Instagram: <span class="hosts1_cusColor">@awalkerinLA</span>
								</p>
							</div>
							<div class="span2">
								<p>
									<img class="hostsPPL_img" src="<?php bloginfo('template_directory'); ?>/images/bio-hailyzaki@x1.jpg" alt= " " />
								</p>
								<h3 class="hosts2_cusColor">Haily<br />Zaki</h3>
								<p>VICE PRESIDENT/<br />CO-FOUNDER</p>
							</div>
							<div class="span4">
								<p>
									A creative at heart, Haily Zaki satisfies her love for modern
									design by promoting great companies doing interesting things.
									She launched <span class="hosts2_cusColor">Secret Agent PR</span> in 2008 with the specific
									mission of infiltrating the media in the name of good design.
									She is also a co-founder of the <span class="hosts2_cusColor">Los Angeles Design Festival</span>
									and an erstwhile contributor to <span class="hosts2_cusColor">Inhabitat</span> and <span class="hosts2_cusColor">The Architect's
									Newspaper</span>. In her spare time, she blogs about her adventures
									on the <span class="hosts2_cusColor">Intel Report</span> and is the proud mom of a ridiculously
									precocious little boy and a 90-lb. pitbull.<br /><br />
									Twitter: <span class="hosts2_cusColor">@secretagentPR</span><br />
									Instagram: <span class="hosts2_cusColor">@hailyz</span>
								</p>
							</div>
						</article>
						</section>
					<section class="row-fluid">
						<article class="span12">
							<div class="span2">
								<p>
									<img class="hostsPPL_img" src="<?php bloginfo('template_directory'); ?>/images/bio-marissagluck@x1.jpg" alt= " " />
								</p>
								<h3 class="hosts3_cusColor">Marissa<br />Gluck</h3>
								<p>SECRETARY</p>
							</div>
							<div class="span4">
								<p>
									Marissa is Director of Huge Ideas at <span class="hosts3_cusColor">Huge</span>, where she
									oversees the digital agency's industry thought
									leadership. Marissa became interested in Los Angeles'
									architecture as she was completing her master's
									thesis for The London School of Economics and USC.
									Thus began a love affair with L.A.'s buildings,
									sushi and sun. In her spare time, Marissa writes
									about L.A. real estate, architecture and urban
									planning for the Los Angeles Times, Atlantic Cities,
									and Los Angeles Magazine, volunteers as a docent
									for the <span class="hosts3_cusColor">Schindler House</span> in West Hollywood,
									and chases after late night taco trucks.<br /><br />
									Twitter: <span class="hosts3_cusColor">@marissagluck</span><br />
									Instagram: <span class="hosts3_cusColor">@msgluck</span>
	
								</p>
							</div>
							<div class="span2">
								<p>
									<img class="hostsPPL_img" src="<?php bloginfo('template_directory'); ?>/images/bio-erincullerton@x1.jpg" alt= " " />
								</p>
								<h3 class="hosts4_cusColor">Erin<br />Cullerton</h3>
								<p>TREASURER</p>
							</div>
							<div class="span4">
								<p>
									Erin is the founder of <span class="hosts4_cusColor">Design Agency Co.</span>, a
									boutique PR firm specializing in communications,
									strategy and cultural engagement for the
									design industry. A newfound lover of Los
									Angeles' rolling hills, Erin is the former
									assistant director of AIA San Francisco and
									creator of the popular <span class="hosts4_cusColor">Architecture and the
									City festival</span>. A consummate advocate for
									good design, Erin serves on advisory committees
									for The Architect's Newspaper, A+D Museum, and
									the Southern California Architecture and Design
									Consortium. She is an honorary AIA SF member and
									an occasional curator, writer and crafter.<br /><br />
									Twitter: <span class="hosts4_cusColor">@designagencyco</span><br />
									Instagram: <span class="hosts4_cusColor">@designagencyco</span>

								</p>
							</div>
						</article>
					</section>
				   <section class="row-fluid"><!--Advisory board start-->
				   		<article class="span12">
							<div class="span3">
								<img class="advBoard_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   			<h1 class="span6" id="advBoard_title">Advisory Board</h1>
							<div class="span3">
								<img class="advBoard_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   		</article>
				   </section>
				   <section class="row-fluid">
						<article class="span12">
							<div class="span2">
								<img class="advBoard_img" src="<?php bloginfo('template_directory'); ?>/images/bio-francesanderton@x1.jpg" alt= " " />
							</div>
				   			<h3 class="span2"><span class="advBoard1_cusColor">Frances Anderton</span></h3>
							<div class="span2">
								<img class="advBoard_img" src="<?php bloginfo('template_directory'); ?>/images/bio-barbarabestor@x1.jpg" alt= " " />
							</div>
							<h3 class="span2"><span class="advBoard2_cusColor">Barbara Bestor</span></h3>
							<div class="span2">
								<img class="advBoard_img" src="<?php bloginfo('template_directory'); ?>/images/bio-kristakline@x1.jpg" alt= " " />
							</div>
							<h3 class="span2"><span class="advBoard3_cusColor">Krista Kline</span></h3>
				   		</article>
				   </section>
				   <section class="row-fluid">
						<article class="span12">
							<div class="span4">	
								<p>
									Frances is the host of <span class="advBoard1_cusColor">DnA: Design and Architecture</span>
									aired monthly on 89.9 KCRW and podcast weekly at KCRW.com/dna. She is also a former producer of
									KCRW's national and local current affairs shows, To The Point, and Which
									Way, LA?, both hosted by Warren Olney. In addition, she is a frequent
									public speaker on architecture and design. Prior to this she reported for
									many years on West Coast design for The New York Times. She has authored
									and edited several books and is currently co-teaching a research-based
									studio at USC Architecture School with Frank Gehry. In 2009 she was made
									an honorary member of the AIA/LA, and in 2010 the USC School of Architecture's
									Architectural Guild gave her their sixth Esther McCoy Award for her work
									in educating the public about architecture and urbanism.<br /><br />
									Twitter: <span class="advBoard1_cusColor">@francesanderton</span>
								</p>
							</div>
							<div class="span4">	
								<p>
									Barbara is the principal of <span class="advBoard2_cusColor">Barbara Bestor
									Architecture</span>, a Los Angeles-based modern architecture firm founded
									in 1995. The office produces a varied body of design work that operates in
									the borderlands of popular culture, art and architecture. In recent years
									Barbara has created environments, installations, houses, graphics and
									commercial spaces for many clients, as well as a book,
									<span class="advBoard2_cusColor">Bohemian Modern; Living in Silver Lake</span>
									(Harper Collins, 2006). Her built work has been published in a wide range of
									media and featured in several museum exhibitions. She is always interested
									in Southern California as both the site and subject of architecture and
									culture production.<br /><br />
									Twitter: <<span class="advBoard1_cusColor">@barbarabestor</span>
								</p>
							</div>
							<div class="span4">	
								<p>
									As the managing director of the <span class="advBoard3_cusColor">Los Angeles
									Regional Collaborative for Climate Action and Sustainability</span> (LARC),
									Krista works to encourage greater coordination and cooperation to address
									climate change and promote a green economy through sustainable communities.
									Previously, Krista worked in the City of Los Angeles's Housing Department,
									where she managed a $4.6 million grant from the Department of Energy to
									perform energy efficiency retrofits at multifamily affordable housing developments.
									Prior to that, she worked in the Office of the Mayor, handling urban planning
									and land use issues, including the implementation of the <span class="advBoard3_cusColor">Los
									Angeles River Revitalization Master Plan</span>. She also headed up the Mayor's Green Building
									effort, coordinating a strategy to push sustainable design and construction into the mainstream.<br /><br />
									
									Twitter: <span class="advBoard3_cusColor">@Climate_Matters</span>
								</p>
							</div>
						</article>
				   </section><!--Advisory board end-->
				   <section class="row-fluid" id="Contact"><!--contact us start-->
				   		<article class="span12">
							<div class="span4">
								<img class="contact_us_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   			<h1 class="span4" id="contact_us_title">Contact Us</h1>
							<div class="span4">
								<img class="contact_us_img" src="<?php bloginfo('template_directory'); ?>/images/black_bar_thumb.png" alt= " " />
							</div>
				   		</article>
				   </section>
				   <section class="row-fluid">
				   	<article class="span12">
				   	<p>We can be reached by email here:<br />
				   	<span id="contact_cusColor"><a href="#">hello@designeastoflabrea.org</a></span></p>
				   	<!-- enter social links below-->
				   	<br />
				   	<p>Keep up with us on Flicker, Twiiter, Facebook and Instagram</p>
				   	</article>
				   </section>
				   <!--contact us end-->
				  </div><!-- end margin -->
				</div> <!-- end #main -->
				<?php //get_sidebar(); // sidebar 1 ?>
				 <div class="container">
				<!-- this is the content of static hyperlink boxes -->
				</div>
			</div> <!-- end #content -->

<?php get_footer(); ?>
