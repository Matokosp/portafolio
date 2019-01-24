<?php 
/*Template Name: Home*/
get_header() ?>

<div class="mi-contenedor">
	<nav class="menu">
			<div class="menu__responsive">
		    	<div class="menu__responsive--hidden" id="menu-hide">
			        <a href="#home">
			        	<?php if (have_posts()) { ?>
		                    <?php while(have_posts()) { ?>
		                        <?php the_post(); ?>
		                        
		                        <img class="menu__responsive-logo" src="<?php the_field('logo') ?>">

		                    <?php } ?>
		            	<?php } ?>
			        </a>
			        <ul class="menures">
			            <li><a href="#me">me</a></li>        
			            <li><a href="#work">work</a></li>
			            <li><a href="#photography">photography</a></li>
			            <li><a href="#contact"><h4>contact</h4></a></li>
			        </ul>
		    	</div>
			    <div class="hamburger__section" id="hamburger">
		       		<div class="hamburger__section-icon"></div>
		       		<div class="hamburger__section-icon" id="menuicon-middle"></div>
		       		<div class="hamburger__section-icon"></div>
		    	</div>
			</div>
			<section class="main_menu">
				<div id="corner__square" class="corner__square-yellow">
					<h3></h3>
				</div>
				<ul id="main_menu_ul">
					<li><a class="active" href="#home">home</a></li>
					<li><a href="#me">me</a></li>
					<li><a href="#work">work</a></li>
					<li><a href="#photography">photography</a></li>
					<li><a href="#contact">contact</a></li>
				</ul>
			</section>
		</nav>
		<section class="content-01 row" id="home">
			<?php
				$arg = array(
					'post_type'		 => 'frontslide',
				);
			
				$get_arg = new WP_Query( $arg );
			
				while ( $get_arg->have_posts() ) {
					$get_arg->the_post();
				?>
					
					<div class="flexslider slider__home col-sm-12 col-md-3">
						<ul class="slides">
							<li class="home__slide slide-1" style="background-image: url('<?php the_field('slide_1'); ?>');"></li>
							<li class="home__slide slide-2" style="background-image: url('<?php the_field('slide_2'); ?>');"></li>
							<li class="home__slide slide-3" style="background-image: url('<?php the_field('slide_3'); ?>');"></li>
						</ul>
			        </div>
			        <div class="flexslider slider__home-secondary col-md-3">
						<ul class="slides">
							<li class="home__slide slide-1-1" style="background-image: url('<?php the_field('slide_1_1'); ?>');"></li>
							<li class="home__slide slide-2-2" style="background-image: url('<?php the_field('slide_2_2'); ?>');"></li>
							<li class="home__slide slide-3-3" style="background-image: url('<?php the_field('slide_3_3'); ?>');"></li>
						</ul>
			        </div>
			
				<?php } wp_reset_postdata();
			?>
	        <div class="home__content col-md-offset-2 col-md-3">
	        	<?php if (have_posts()) { ?>
                    <?php while(have_posts()) { ?>
                        <?php the_post(); ?>
                        
                        <img src="<?php the_field('logo') ?>">
                        <h2><?php the_field('title_home') ?></h2>

                    <?php } ?>
            	<?php } ?>
	        </div>
	        	<?php if (have_posts()) { ?>
                    <?php while(have_posts()) { ?>
                        <?php the_post(); ?>
                        
                        <h4><?php the_field('name_home') ?></h4>
                        <h4><?php the_field('description_home') ?></h4>

                    <?php } ?>
            	<?php } ?>
	    	<div class="home__content-circle"></div>
		</section>
		<section class="content-02 snap" id="me">
			<?php if (have_posts()) { ?>
                <?php while(have_posts()) { ?>
                    <?php the_post(); ?>
                    
                    <div class="me__section--responsive" style="background-image: url('<?php the_field('me_bkg_responsive'); ?>');"></div>

                <?php } ?>
        	<?php } ?>			
			<div class="me__section">
				<video autoplay muted loop class="embed-responsive-item" src="<?php bloginfo('template_url') ?>/assets/images/reel.mp4" id="myVideo" "></video>
			</div>
			<div class="timeline">
				<?php if (have_posts()) { ?>
	                <?php while(have_posts()) { ?>
	                    <?php the_post(); ?>

						<div class="row timeline__title">
							<div class="col-xs-offset-3 col-md-offset-2">
								<h3><?php the_field('timeline_title') ?></h3>
							</div>
						</div>

	                <?php } ?>
	        	<?php } ?>
				<?php
					$arg = array(
						'post_type'		 => 'timeline_event',
						'posts_per_page' => 4,
					);
				
					$get_arg = new WP_Query( $arg );
				
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
						
				<div class="row timeline__event">
					<div class="col-xs-3 col-md-offset-1 col-md-1 timeline__event_date">
						<div class="timeline__event_block"></div>
						<span><?php the_field('date') ?></span>
					</div>
					<div class="col-xs-7 col-md-5 timeline__event_description">
						<p><?php the_field('event_description') ?></p>
					</div>
				</div>
				
					<?php } wp_reset_postdata();
				?>
			</div>
			<div class="row skills">
				<div class="skills__text col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-5">
					<h3>Skills</h3>
					<?php if (have_posts()) { ?>
		                <?php while(have_posts()) { ?>
		                    <?php the_post(); ?>

		                    <p><?php the_field('skill_description') ?></p>

		                <?php } ?>
		        	<?php } ?>
				</div>
				<div class="skills__cat col-xs-offset-1 col-xs-10 col-md-2">
					<div class="skills__cat_item">
						<div class="skills__cat_item-logo">
							<img src="<?php bloginfo('template_url') ?>/assets/images/design-icon-white.png">
						</div>
						<h4 class="skills__cat_item-title">design</h4>						
						<ul class="skills__cat_item-list">
							<li>Illustrator</li>
							<li>Photoshop</li>
							<li>Lightroom</li>
							<li>After Effects</li>
						</ul>						
					</div>
					<div class="skills__cat_item">
						<div class="skills__cat_item-logo">
							<img src="<?php bloginfo('template_url') ?>/assets/images/web-icon-white.png">
						</div>
						<h4 class="skills__cat_item-title">web</h4>
						<ul class="skills__cat_item-list">
							<li>HTML</li>
							<li>CSS</li>
							<li>jQuery</li>
							<li>Wordpress</li>
						</ul>
					</div>
					<div class="skills__cat_item">
						<div class="skills__cat_item-logo">
							<img src="<?php bloginfo('template_url') ?>/assets/images/photo-icon-white.png">
						</div>
						<h4 class="skills__cat_item-title">photography</h4>
					</div>
				</div>					
			</div>
		</section>
</div>

<?php get_footer() ?>