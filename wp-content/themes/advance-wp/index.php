<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name');?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
	<header>
		<div class="container">
			<h1>
				<a href="<?php echo home_url('/'); ?>">
					<?php bloginfo('charset'); ?>
				</a>
				<small><?php bloginfo('description'); ?></small>
			</h1>
			<div class="h_right">
				<form method="get" action="<?php esc_url(home_url('/')) ?>">
					<input type="text" placeholder="Search..." name="s">
				</form>
			</div>
		</div>
	</header>

	<nav class="nav main-nav">
		<div class="container">
			<?php
			$args = array(
				'theme_location' => 'primary'
			);
			?>

			<?php wp_nav_menu('$args'); ?>
		</div>
	</nav>

	<div class="container content">
		<div class="main block">
			<?php if (have_posts()) : ?>
			<?php while(have_posts()) : the_post();  ?>
			<article class="post">
				<h2><?php the_title();?></h2>
				<p class="meta">Posted at 
					<?php the_time(); ?>
						by 
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>">
						<?php the_author();  ?>
					</a>
					Posted in
					<?php $categories = get_the_category();
						  $saparator = ',';
						  $output = '';

						  if($categories)
						  {
						  	foreach($categories as $category)
						  	{
						  		$output .= '<a href=" '.get_category_link($category->term_id).'" >'.$category->cat_name.'</a>'.$seprator;
						  	}
						  }
						  echo trim($output, $seprstor);
					?>
					</p>
				<p><?php the_excerpt();  ?></p>
			</article>
				<a class="button" href="#">Read More</a>
			</article>
			<?php endwhile; ?>
			<?php else : ?>
				<?php echo apautop('sorry, page mnot found'); ?>
			<?php endif; ?>


		
		</div>

		<div class="side">
			<div class="block">
				<h3>Sidebar Head</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim orci, commodo vitae aliquet id, volutpat ut dui. Phasellus quis tempor nulla. Pellentesque vulputate dui purus, eget aliquet quam laoreet non.</p>
				<a class="button">More</a>
			</div>
		</div>
	</div>

	<footer class="main-footer">
		<div class="container">
			<div class="f_left">
				<p>&copy; 2019 - Advanced WP Theme</p>
			</div>
			<div class="f_right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="#">Services</a></li>
				</ul>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</body>
</html>