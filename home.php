<?php

/**
 * 
 *
 * This template is used to display the blog page.
 *
 * @package YourTheme
 */


 $blog_single__post_global_ad_id = get_field('global_post_ad', 'general_settings');
 $global_ad_link = get_field('global_ad_link', 'general_settings');

$blog_page_ad_id = get_field('blog_ad');
$ad_link = get_field('blog_ad_link');




get_header();
?>

<main id="primary" class="site-main">
    <header class="blog-header">
        <h1 class="entry-title" itemprop="name"><?php echo get_the_title(get_option('page_for_posts', true)); ?></h1>
    </header>
    <div class="container">
        <div class="left-column">
            <div class="left-column-content">
                <?php if ($blog_page_ad_id ) : ?>
                    <a href="<?php echo $ad_link ?>" target="blank" class="ad">
                        <?php echo wp_get_attachment_image($blog_page_ad_id , 'full'); ?>
                    </a>
                <?php endif; ?>
                <?php if ($blog_single__post_global_ad_id) : ?>
                    <a href="<?php echo $global_ad_link ?>" target="blank" class="ad_global">
                        <?php echo wp_get_attachment_image($blog_single__post_global_ad_id, 'full'); ?>
                    </a>
                <?php endif; ?>
                <p class="taxonomy-title"><?php echo "Tagi" ?></p>
                <div class="tags-container">

                    <?php
                    $all_tags = get_tags();

                    foreach ($all_tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="tag">' . $tag->name . '</a>';
                    }
                    ?>

                </div>
                <p class="taxonomy-title"><?php echo "Kategorie" ?></p>
                <div class="category-container">

                    <?php
                    $all_categories = get_categories();

                    foreach ($all_categories as $category) {
                        echo '<a href="' . get_category_link($category->term_id) . '" class="category">' . $category->name . '</a>';
                    }
                    ?>

                </div>
            </div>
        </div>

        <div class="posts-pagination-container right-column">
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
