<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


$blog_single__post_ad_id = get_field('post_ad');
$ad_link = get_field('ad_link');

$blog_single__post_global_ad_id = get_field('global_post_ad', 'general_settings');
$global_ad_link = get_field('global_ad_link', 'general_settings');
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="single-post-main-container">
            <div class="left-column">
                <div class="blog-single-posts">
                    <?php
                    // Start the loop.
                    while (have_posts()) : the_post();
                    ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="featured-image">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                        <?php endif; ?>
                        <h1 class="post-title"><?php the_title(); ?></h1>

                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    <?php
                    // End the loop.
                    endwhile;
                    ?>
                    <div class="share-container">
                        <div class="share">
                            <p><?php echo __("Udostępnij ten post:"); ?></p>
                            <?php
                            echo do_shortcode('[Sassy_Social_Share]');
                            ?>
                        </div>
                    </div>
                    <div class="related-posts">
                        <h3 class="related-title">
                            <?php echo __("Podobne wpisy"); ?>
                        </h3>

                        <?php

                        // Pobranie aktualnej kategorii bieżącego posta
                        $current_post_categories = get_the_category();
                        $current_post_category_ids = array();

                        // Pobranie identyfikatorów kategorii dla bieżącego posta
                        foreach ($current_post_categories as $category) {
                            $current_post_category_ids[] = $category->term_id;
                        }

                        // Tworzenie zapytania na podstawie identyfikatorów kategorii bieżącego posta
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'category__in' => $current_post_category_ids, // Wyświetlanie postów z tą samą kategorią co bieżący post
                        );

                        $query = new WP_Query($args);

                        // Check if there are posts

                        if ($query->have_posts()) { ?>
                            <div class="blog-posts">
                                <?php
                                while ($query->have_posts()) : $query->the_post(); ?>
                                    <?php get_template_part('entry'); ?>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>

                        <?php
                        } ?>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="right-column-content">
                    <?php if ($blog_single__post_ad_id) : ?>
                        <a href="<?php echo $ad_link ?>" target="blank" class="ad">
                            <?php echo wp_get_attachment_image($blog_single__post_ad_id, 'full'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($blog_single__post_global_ad_id ) : ?>
                        <a href="<?php echo $global_ad_link ?>" target="blank" class="ad_global">
                            <?php echo wp_get_attachment_image($blog_single__post_global_ad_id , 'full'); ?>
                        </a>
                    <?php endif; ?>
                    <p class="taxonomy-title"><?php echo "Tagi"?></p>
                    <div class="tags-container">
                    
                        <?php
                        $all_tags = get_tags();
                        $current_post_tags = wp_get_post_tags(get_the_ID(), array('fields' => 'ids'));

                        foreach ($all_tags as $tag) {
                            $tag_class = in_array($tag->term_id, $current_post_tags) ? 'active' : ''; // Sprawdzenie czy tag należy do bieżącego posta

                            echo '<a href="' . get_tag_link($tag->term_id) . '" class="tag ' . $tag_class . '">' . $tag->name . '</a>';
                        }
                        ?>

                    </div>
                    <p class="taxonomy-title"><?php echo "Kategorie"?></p>
                    <div class="category-container">
                        
                        <?php
                        $all_categories = get_categories();
                        $current_post_categories = wp_get_post_categories(get_the_ID(), array('fields' => 'ids'));

                        foreach ($all_categories as $category) {
                            $category_class = in_array($category->term_id, $current_post_categories) ? 'active' : ''; // Sprawdzenie czy kategoria należy do bieżącego posta

                            echo '<a href="' . get_category_link($category->term_id) . '" class="category ' . $category_class . '">' . $category->name . '</a>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
</div>



</main>
</div>

<?php get_footer(); ?>