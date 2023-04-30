<?php get_header(); ?>
<h2>Latest:</h2>
<?php if (have_posts()): ?>
	<ul class="properties-listing">
		<?php while (have_posts()):
			the_post(); ?>

			<?php get_template_part('partials/content', 'home'); ?>

		<?php endwhile; ?>

		<?php posts_nav_link()?>
	</ul>
<?php endif; ?>
<?php get_footer(); ?>