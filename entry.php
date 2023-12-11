<?php

/**
 * This template is used to display the article in the blog loop.
 *
 * @package YourTheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-summary">
        <?php if (has_post_thumbnail()) :
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full'); // Replace 'medium' with your desired image size
        ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title(); ?><" class="custom-thumbnail-class" />
            </a>

            <div class="post-short-description">
                <h2 class="entry-title">
                    <?php the_title(); ?>
                </h2>

                <div class="description" itemprop="description"><?php the_excerpt(); ?></div>
            </div>
            <div class="button-wrapper">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php echo "Czytaj więcej" ?></a>
            </div>
        <?php endif; ?>
    </div>
</article>