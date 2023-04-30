<?php get_header(); ?>

<h2>
    <?php the_archive_title() ?>
</h2>
<?php if (have_posts()): ?>
    <ul class="properties-listing">
        <?php while (have_posts()):
            the_post(); ?>

            <?php get_template_part('partials/content', 'archive'); ?>


        <?php endwhile; ?>
        <?php posts_nav_link()?>
    </ul>
<?php else: ?>
    <?php _e('No posts yet.', 'homes') ?>

<?php endif; ?>

<?php get_footer(); ?>