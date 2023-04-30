<li class="property-card">
    <div class="property-primary">
        <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <div class="property-meta">
            <span class="meta-location">
                <?php get_the_category(); ?>
            </span>
        </div>
        <div class="property-details">
            <span class="property-price">€ 100,815</span>
            <span class="property-date">
                <?php echo get_the_date() ?>
            </span>
        </div>
    </div>
    <div class="property-image">
        <div class="property-image-box">
            <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img src="wp-content\themes\softuni-homes\images\bedroom.jpg" alt="default img">
            <?php endif; ?>
        </div>
    </div>
</li>