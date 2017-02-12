<?php

require ('objects/skateboard.php');

get_header();

echo '<h2>Single-Skateboarding</h2>';

if( have_posts()): while ( have_posts()) : the_post();?>
	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div class="content">
	<p><?php the_content();?></p>
	</div>
	<div class="content-info">
	<?php 
	$date = get_the_date();
	$post = get_the_ID();
	var_dump($post);
	echo '<p>' . get_the_author() . ' hat diesen Post am ' . get_the_date() .  ' erstellt.</p>';?>
	</div>
	
	<?php
	$skateboard = new skateboard($post);
	echo "Hier ist Objekt: $skateboard->name<br>";
	\Timo\MoreArticles::init();
	endwhile; endif; 
	get_footer(); 
	dynamic_sidebar('neue_sidebar');
	
	

?>

