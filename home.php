<?php

/**
 * 
 *
 * This template is used to display the blog page.
 *
 * @package YourTheme
 */

get_header();
?>

<main id="primary" class="site-main">
    <header class="blog-header">
        <h1 class="entry-title" itemprop="name"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h1>
    </header>
    <div class="container">
        <div class="posts-pagination-container">
            <?php if (have_posts()) : ?>
                <div class="blog-posts">
                    <?php
                    while (have_posts()) :
                        the_post();
                        get_template_part('entry');
                        comments_template();
                    endwhile; ?>
                </div>
                <?php
                // Pagination
                get_template_part('nav', 'below');
                ?>
            <?php else : ?>
                <p><?php _e('No posts found.', 'your-theme'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php
get_footer();
