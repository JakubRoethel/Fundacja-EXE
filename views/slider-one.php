<?php

$title = get_field('blog_post_category_slider_one')['title'];
$subTitle = get_field('blog_post_category_slider_one')['subtitle'];
$description = get_field('blog_post_category_slider_one')['short_description'];
$chosenCategory = get_field('blog_post_category_slider_one')['choose_blog_post_category'];


$args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'order' => 'DESC',
    'orderby' => 'date',
    'cat' => $chosenCategory
);
$query = new WP_Query($args);

?>

<div class="sliders sliders-section slider-one" id="slider-one">
    <div class="section-heading-wrapper">
        <?php if ($subTitle) : ?>
            <h3 class="subtitle">
                <?php echo $subTitle ?>
            </h3>
        <?php endif; ?>
        <?php if ($title) : ?>
            <h2 class="title">
                <?php echo $title ?>
            </h2>
        <?php endif; ?>
        <?php if ($description) : ?>
            <p class="short-description">
                <?php echo $description ?>
            </p>
        <?php endif; ?>
    </div>
    <div class="swiper-container">
        <div class="swiper swiper-one">
            <div class="swiper-wrapper">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="swiper-slide">
                        <?php get_template_part('entry'); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>

    </div>

</div>